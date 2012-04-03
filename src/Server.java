import org.apache.thrift.server.TServer;
import org.apache.thrift.server.TThreadPoolServer;
import org.apache.thrift.transport.TServerSocket;
import org.apache.thrift.transport.TTransportException;



public class Server {

	/**
	 * @param args
	 * @throws TTransportException 
	 */
	public static void main(String[] args) throws TTransportException {
		
		TServerSocket serverTransport = new TServerSocket(8888);
		Calculator.Processor processor  = new Calculator.Processor(new CaculatorImpl());
		TServer server = new TThreadPoolServer(new TThreadPoolServer.Args(serverTransport).processor(processor));
		System.out.println("Starting server on port 8888" );
		//start serving
        server.serve();

	}

}
