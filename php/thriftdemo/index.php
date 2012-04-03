<?php
	$GLOBALS['THRIFT_ROOT'] = 'src';
		require_once $GLOBALS['THRIFT_ROOT'].'/Thrift.php';
		require_once $GLOBALS['THRIFT_ROOT'].'/protocol/TBinaryProtocol.php';
		require_once $GLOBALS['THRIFT_ROOT'].'/transport/TSocket.php';
		require_once $GLOBALS['THRIFT_ROOT'].'/transport/THttpClient.php';
		require_once $GLOBALS['THRIFT_ROOT'].'/transport/TBufferedTransport.php';
		require_once $GLOBALS['THRIFT_ROOT'].'/packages/calc/Calculator.php';
  echo "Hello \n";

			$socket = new TSocket('localhost', 8888);
			$transport = new TBufferedTransport($socket, 1024, 1024);
			$protocol = new TBinaryProtocol($transport);
			$client = new CalculatorClient($protocol);
			$transport->open();
      $add_result = $client->add(5,10);
      echo "The result is " . $add_result;
?>
