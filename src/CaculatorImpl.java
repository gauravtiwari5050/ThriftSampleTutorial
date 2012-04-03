import org.apache.thrift.TException;


public class CaculatorImpl implements Calculator.Iface{

	@Override
	public int add(int x, int y) throws TException {
		return x +  y;
	}

}
