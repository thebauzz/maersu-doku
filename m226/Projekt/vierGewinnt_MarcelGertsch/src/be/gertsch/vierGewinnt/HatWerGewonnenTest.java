package be.gertsch.vierGewinnt;

import static org.junit.Assert.*;

import org.junit.Test;

public class HatWerGewonnenTest extends HatWerGewonnen {

	@Test
	public void testHatWerGewonnen() {
		feld[8]  = 'X';
		feld[15] = 'X';
		feld[22] = 'X';
		feld[29] = 'X';
		
		for (int a = 0; a <= 20; a++) {
			if (feld[a] == 'X' && feld[a+7] == 'X' && feld[a+14] == 'X' && feld[a+21] == 'X') {
				win = 1;
				gameOver = true;
			}
		}
		assertEquals(1, win);
	}
	
	@Test
	public void testHatWerGewonnen2() {
		feld[8]  = 'O';
		feld[15] = 'O';
		feld[22] = 'O';
		feld[29] = 'O';
		
		for (int a = 20; a >= 3; a--) {
			if (a == 0 || a == 1 || a == 2 || a == 7 || a == 8 || a == 9 || a == 14 || a == 15 || a == 16 ) {
				continue;
			}
			else if (feld[a] == 'O' && feld[a+6] == 'O' && feld[a+12] == 'O' && feld[a+18] == 'O') {
				win = 2;
				gameOver = true;
			}
		}
		assertEquals(0, win); // Erwarte, dass niemand gewonnen hat
	}

	@Test
	public void testHatWerGewonnen3() {
		feld[4]  = 'O';
		feld[10] = 'O';
		feld[16] = 'O';
		feld[22] = 'O';
		
		for (int a = 20; a >= 3; a--) {
			if (a == 0 || a == 1 || a == 2 || a == 7 || a == 8 || a == 9 || a == 14 || a == 15 || a == 16 ) {
				continue;
			}
			else if (feld[a] == 'O' && feld[a+6] == 'O' && feld[a+12] == 'O' && feld[a+18] == 'O') {
				win = 2;
				gameOver = true;
			}
		}
		assertEquals(2, win); // Erwarte, dass O gewonnen hat
	}
	
}
