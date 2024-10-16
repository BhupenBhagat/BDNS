import com.mongodb.client.MongoCollection;
import com.mongodb.client.MongoDatabase;
import com.mongodb.MongoClient;
import org.bson.Document;
public class insert
{
	public static void main(String[]args)
	{	
		MongoClient mongo = new MongoClient("localhost",27017);
		System.out.println("connected myCol selected successfully");
		MongoDatabase database = mongo.getDatabase("Bhupen13");
		MongoCollection<Document> collection = database.getCollection("myCol");
		Document document = new Document();
		document.append("id",1);
		document.append("name","Bhupen");		
		document.append("Roll No",13);
		document.append("Age",20);
		document.append("College","Mcc");
		collection.insertOne(document);
		System.out.println("Document insert ");

	}
}