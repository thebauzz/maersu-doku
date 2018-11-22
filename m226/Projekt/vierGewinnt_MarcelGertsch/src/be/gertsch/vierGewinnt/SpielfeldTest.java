package be.gertsch.vierGewinnt;

import static org.junit.Assert.*;
import java.util.Arrays;
import org.junit.Test;

public class SpielfeldTest {

	char[] feld = new char[42];
	
	@Test
	public void testSpielfeld() {
		assertEquals(42, feld.length);
	}
	
	@Test
	public void testErsteEingabe() {
		
		for (int f = feld.length - 1; f >= 0; f--) {
			feld[f] = ' ';
		}
		feld[7] = 'X';
		assertEquals('X', feld[7]);
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
		String testlist = Arrays.toString(feld);
		assertEquals("[ ,  ,  ,  ,  ,  , X,  ,  ,  ,  ,  , X,  ,  ,  ,  ,  , X,  ,  ,  ,  ,  , X,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ,  ]", testlist);
	}

}
