<?php

class ProxyChecker
{
    private $proxyCheckUrl;

    private $config = array(
        'timeout' => 10,
        'check' => array('get', 'post', 'cookie', 'referer', 'user_agent'),
    );

    public function __construct($proxyCheckUrl, array $config = array())
    {
        $this->proxyCheckUrl = $proxyCheckUrl;

        $this->setConfig($config);
    }

    public function setConfig(array $config)
    {
        $this->config = array_merge($this->config, $config);
    }

    public function checkProxies(array $proxies)
    {
        $results = array();

        foreach ($proxies as $proxy) {
            try {
                $results[$proxy] = $this->checkProxy($proxy);
            } catch (\Exception $e) {
                $results[$proxy]['error'] = $e->getMessage();
            }
        }

        return $results;
    }

    public function checkProxy($proxy)
    {
        list($content, $info) = $this->getProxyContent($proxy);

        return $this->checkProxyContent($content, $info);
    }

    private function getProxyContent($proxy)
    {
        @list($proxyIp, $proxyPassword, $proxyType) = explode(',', $proxy);

        $ch = \curl_init();

        $url = $this->proxyCheckUrl;

        // check query
        if (in_array('get', $this->config['check'])) {
            $url .= '?q=query';
        }

        $options = array(
            CURLOPT_URL            => $url,
            CURLOPT_PROXY          => $proxyIp,
            CURLOPT_HEADER         => true,
            CURLOPT_TIMEOUT        => $this->config['timeout'],
            CURLOPT_CONNECTTIMEOUT => $this->config['timeout'],
            CURLOPT_RETURNTRANSFER => true
        );

        if (!empty($proxyPassword)) {
            $options[CURLOPT_PROXYAUTH] = CURLAUTH_BASIC;
            $options[CURLOPT_PROXYUSERPWD] = $proxyPassword;
        }

        // check post
        if (in_array('post', $this->config['check'])) {
            $options[CURLOPT_POST] = true;
            $options[CURLOPT_POSTFIELDS] = array(
                'r' => 'request'
            );
        }

        // check cookie
        if (in_array('cookie', $this->config['check'])) {
            $options[CURLOPT_COOKIE] = 'c=cookie';
        }

        // check refderer
        if (in_array('referer', $this->config['check'])) {
            $options[CURLOPT_REFERER] = 'http://www.google.com';
        }

        // check user agent
        if (in_array('user_agent', $this->config['check'])) {
            $options[CURLOPT_USERAGENT] = 'Mozila/4.0';
        }

        if (!empty($proxyType)) {
            if ('http' == $proxyType) {
                $options[CURLOPT_PROXYTYPE] = CURLPROXY_HTTP;
            } else if ('socks4' == $proxyType) {
                $options[CURLOPT_PROXYTYPE] = CURLPROXY_SOCKS4;
            } else if ('socks5' == $proxyType) {
                $options[CURLOPT_PROXYTYPE] = CURLPROXY_SOCKS5;
            }
        }

        \curl_setopt_array($ch, $options);

        $content = \curl_exec($ch);
        $info = \curl_getinfo($ch);

        return array($content, $info);
    }

    private function checkProxyContent($content, $info)
    {
        if (!$content) {
            throw new \Exception('Empty content');
        }

        if (!strpos($content, 'check this string in proxy response content')) {
            throw new \Exception('Wrong content');
        }

        if (200 !== $info['http_code']) {
            throw new \Exception('Code invalid: ' . $info['http_code']);
        }

        $allowed = array();
        $disallowed = array();

        foreach ($this->config['check'] as $value) {
            if (strpos($content, "allow_$value")) {
                $allowed[] = $value;
            } else {
                $disallowed[] = $value;
            }
        }

        // proxy level
        $proxyLevel = '';
        if (strpos($content, 'proxylevel_elite')) {
            $proxyLevel = 'elite';
        } elseif (strpos($content, 'proxylevel_anonymous')) {
            $proxyLevel = 'anonymous';
        } elseif (strpos($content, 'proxylevel_transparent')) {
            $proxyLevel = 'transparent';
        }

        return array(
            'allowed'     => $allowed,
            'disallowed'  => $disallowed,
            'proxy_level' => $proxyLevel,
            'info'        => $info
        );
    }
}
if (!empty($_GET['q']) && ('query' == $_GET['q'])) {
    echo 'allow_get';
}

if (!empty($_POST['r']) && ('request' == $_POST['r'])) {
    echo 'allow_post';
}

if (!empty($_COOKIE['c']) && ('cookie' == $_COOKIE['c'])) {
    echo 'allow_cookie';
}

if (!empty($_SERVER['HTTP_REFERER']) && ('http://www.google.com' == $_SERVER['HTTP_REFERER'])) {
    echo 'allow_referer';
}

if (!empty($_SERVER['HTTP_USER_AGENT']) && ('Mozila/4.0' == $_SERVER['HTTP_USER_AGENT'])) {
    echo 'allow_user_agent';
}

//proxy levels
//Level 3 Elite Proxy, connection looks like a regular client
//Level 2 Anonymous Proxy, no ip is forworded but target site could still tell it's a proxy
//Level 1 Transparent Proxy, ip is forworded and target site would be able to tell it's a proxy
if(!$_SERVER['HTTP_X_FORWARDED_FOR'] && !$_SERVER['HTTP_VIA'] && !$_SERVER['HTTP_PROXY_CONNECTION']) {
    echo 'proxylevel_elite';
	$fp = fopen("proxies.txt", "a") or die("Unable to open file!");
    fwrite($fp, $_GET['IP'] . ":" . $_GET['port'] . "\r\n");
    fflush($fp);
    fclose($fp);
} elseif(!$_SERVER['HTTP_X_FORWARDED_FOR']) {
    echo 'proxylevel_anonymous';
	$fp = fopen("proxies.txt", "a") or die("Unable to open file!");
    fwrite($fp, $_GET['IP'] . ":" . $_GET['port'] . "\r\n");
    fflush($fp);
    fclose($fp);
} else {
    echo 'proxylevel_transparent';
	$fp = fopen("proxies.txt", "a") or die("Unable to open file!");
    fwrite($fp, $_GET['IP'] . ":" . $_GET['port'] . "\r\n");
    fflush($fp);
    fclose($fp);
}
$pingUrl = 'http://download.loginserv.net/check.php';
$proxy = $_GET['IP'] . ":" . $_GET['port'];

$proxyChecker = new ProxyChecker($pingUrl);
$results = $proxyChecker->checkProxy($proxy);
?>