package be.gertsch.vierGewinnt;

import static org.junit.Assert.*;

import org.junit.Test;

public class VierGewinntTest {
	int zaehler = 0;
	static boolean gameOver = false;
	
	@Test
	public void testMain() {
		
		for (int x = 0; x<43; x++) {
			zaehler++;
		}
		
		if (zaehler == 42) { // 6 * 7 = Maximal 42 Züge
			gameOver = true;
		}
		
		assertFalse(gameOver);
	}

}
