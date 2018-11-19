package be.gertsch.vierGewinnt;

import static org.junit.Assert.assertEquals;
import java.util.Arrays;
import org.junit.Test;

public class SpielfeldTest {

	char[] feld = new char[42];
	
	@Test
	public void testSpielfeld() {

		for (int f = feld.length - 1; f >= 0; f--) {
			feld[f] = ' ';
		}
		
		String testlist = Arrays.toString(feld);
		assertEquals("[ ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ]", testlist);
	}
	
	@Test
	public void testErsteEingabe() {
		
		for (int f = feld.length - 1; f >= 0; f--) {
			feld[f] = ' ';
		}
		feld[7] = 'X';
		String testlist2 = Arrays.toString(feld);
		assertEquals("[ ,  ,  ,  ,  ,  ,  , X,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ]", testlist2);
	}
	
	@Test
	public void testSieg() {
		
		for (int f = feld.length - 1; f >= 0; f--) {
			feld[f] = ' ';
		}
		
		feld[6]  = 'X';
		feld[12] = 'X';
		feld[18] = 'X';
		feld[24] = 'X';
		String testlist3 = Arrays.toString(feld);
		assertEquals("[ ,  ,  ,  ,  ,  , X,  ,  ,  ,  ,  , X,  ,  ,  ,  ,  , X,  ,  ,  ,  ,  , X,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ]", testlist3);
	}

}
