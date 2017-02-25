import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.nio.charset.Charset;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
public class BigTravel {
	
	public static void main(String[] args) {
  String inputfile = args[0];
  String outputfile = args[1];
		
  Path file = Paths.get(inputfile);
		//Path file = Paths.get("C:\\Dropbox\\_scripts\\24hoc\\in2.txt");
		int distance2 = 0;
		int x1 = 0;
		int x2 = 0;
		int y1 = 0;
		int y2 = 0;
		int tdist = -1;
	//	int distance = 0;
	//	int totaldistance = 0;
		int count = 0;
			Charset charset = Charset.forName("US-ASCII");
			try (BufferedReader reader = Files.newBufferedReader(file, charset)) {
			    String line = null;
			    while ((line = reader.readLine()) != null) {
			    	int llen = line.length();
			    	if (llen == 1) {
			    //		System.out.println("first line here");
			    		count = Integer.parseInt(line);
			    		System.out.println("Number of cities found: " + count);
			    	}
			    	if (llen >1) {
			    //		int lineindex = 1;
			    	//System.out.println("data");
			    	String[] splitline = line.toString().split(" ");
			    	//System.out.println(splitline);
			    	
			    	
			    	int locindex = 0;
			    	//System.out.println("City: " + locindex);
			    	for (String splitlines : splitline) {
			    	//	System.out.println("City: " + lineindex);
			    		System.out.println(splitlines);
			    		locindex++;
			    		if (locindex == 1) { x1 = Math.abs(Integer.parseInt(splitlines));} //else {return;}
			    		if (locindex == 2) { x2 = Math.abs(Integer.parseInt(splitlines));} //else {return;}
			    		if (locindex == 3) { y1 = Math.abs(Integer.parseInt(splitlines));} //else {return;}
			    		if (locindex == 4) { y2 = Math.abs(Integer.parseInt(splitlines));
			    		break;
			    		}
			    		System.out.println("x1: " + x1 + " x2: " + x2);
			    		System.out.println("y1: " + y1 + " y2: " + y2);
			    		distance2 = Math.abs(((x1-x2))+Math.abs((y1-y2)));
			    		System.out.println("Distance: " + distance2);
			    	tdist = distance2 + tdist;
			    		//tdist = + distance2;
			    		
			    			//System.out.println(string1);
			    			//} 
			    	//	lineindex++;
			    	//	locindex++;
			    	}
			    	
			    	//System.out
			       // System.out.println(line);
			    	}
			    	
			    }
			    System.out.println("Total: " + tdist);
			    
			    
			    Path file2 = Paths.get(outputfile);
		//		Path file2 = Paths.get("C:\\Dropbox\\_scripts\\24hoc\\ou2.txt");
			    
			  //  charset = Charset.forName("US-ASCII");
			    String s = String.valueOf(tdist);
			    try (BufferedWriter writer = Files.newBufferedWriter(file2, charset)) {
			        writer.write(s, 0, s.length());
			    } catch (IOException x) {
			        System.err.format("IOException: %s%n", x);
			    }
			    
			    
			    
			} catch (IOException x) {
			    System.err.format("IOException: %s%n", x);
			}
			
		}
	}