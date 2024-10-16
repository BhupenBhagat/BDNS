import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.BasicDBObject;
import com.mongodb.MongoClient;
import com.mongodb.WriteResult;
import java.net.UnknownHostException;
public class update
{
	public static void main(String[] args)
	{
		MongoClient mongo = new MongoClient("localhost",27017);
		System.out.println("Connected Successfully");
		DB db = mongo.getDB("TYIT51code");
		DBCollection col = db.getCollection("myCol");
		System.out.println("Collection selected Successfully");
		BasicDBObject query = new BasicDBObject("id",1);
		BasicDBObject update = new BasicDBObject();
		update.put("$set",new BasicDBObject("Age",19));
		WriteResult result = col.update(query,update);
		mongo.close();
System.out.println(result);
	}
}