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
  int llen = 0;
		  
  
		
 Path file = Paths.get(inputfile);
	//	Path file = Paths.get("C:\\Dropbox\\_scripts\\24hoc\\in2.txt");
		int distance2 = 0;
		int x1 = 0;
		int x2 = 0;
		int y1 = 0;
		int y2 = 0;
		int tdist = 0;
	//	int distance = 0;
	//	int totaldistance = 0;
		int count = 0;
			Charset charset = Charset.forName("US-ASCII");
			try (BufferedReader reader = Files.newBufferedReader(file, charset)) {
			    String line = null;
			    int z = 0;
			    //int [][] coordinates = new int [37][2]; 
			    int [][] coordinates = null;
			    while ((line = reader.readLine()) != null) {
			    	z++;
			    	
			    	//llen = line.length();  
			    	System.out.println(llen);
			    	if (z == 1) {
			    		llen = Integer.parseInt(line);	
			    		
			    	System.out.println("first line here");
			    		count = Integer.parseInt(line);
			    		System.out.println("Number of cities found: " + count);
			    		coordinates =  new int [count][2];
			    	} else {
			    //		int lineindex = 1;
			    	//System.out.println("data");
			    	String[] splitline = line.toString().split(" ");
			    	System.out.println(splitline);
			    	coordinates[z-2][0] = Integer.parseInt(splitline[0]); 
			    	coordinates[z-2][1] = Integer.parseInt(splitline[1]); 

			    	//	System.out.println("City: " + lineindex);
			    		/////System.out.println(splitlines);
			    		//locindex++;
			    /*		if (locindex == 1) { x1 = Math.abs(Integer.parseInt(splitlines));} //else {return;}
			    		if (locindex == 2) { x1 = Math.abs(Integer.parseInt(splitlines));} //else {return;}
			    		if (locindex == 3) { y2 = Math.abs(Integer.parseInt(splitlines));} //else {return;}
			    		if (locindex == 4) { y2 = Math.abs(Integer.parseInt(splitlines));
			    		System.out.println("line breaking!");
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
			    		locindex++;
			    	}
			    	*/
			    	
			    	//System.out
			       // System.out.println(line);
			    	}
			    	
			    }
			    int newtotalsum = 0;
			    for (int i =0; i<llen ; i++){
			    	int[] rowlocation = coordinates[i];
			    	for (int k = i+1;k<llen; k++) {
			    		int[] rowlocation2 = coordinates[k];
			    		int	xvalues = Math.abs(rowlocation[0]-rowlocation2[0]);
			    		int	yvalues = Math.abs(rowlocation[1]-rowlocation2[1]);
			    		int fvalue = xvalues + yvalues;
			    		newtotalsum = newtotalsum + fvalue;
			    	}
			    	//for (int j =0; j<2 ; j++){
			    	//	System.out.println(coordinates[i][j]);
			    	//}
			    }
			    
			    System.out.println("Total: " + newtotalsum);
			    
			 // create 3 BigInteger objects
			///      BigInteger bi1, bi2, bi3;
//
		///	      bi1 = new BigInteger("-100");
		///	      bi2 = new BigInteger("3");
			    
		///	      bi3 = bi1.mod(bi2);
			    
			    Path file2 = Paths.get(outputfile);
			//	Path file2 = Paths.get("C:\\Dropbox\\_scripts\\24hoc\\ou2.txt");
			    
			  //  charset = Charset.forName("US-ASCII");
			    String s = String.valueOf(newtotalsum);
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