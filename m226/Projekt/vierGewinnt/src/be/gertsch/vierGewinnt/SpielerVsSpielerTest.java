package be.gertsch.vierGewinnt;

import static org.junit.Assert.*;

import org.junit.Test;

public class SpielerVsSpielerTest {

	@Test
	public void test() {
		int nextTurn = 1;
		char figur;
		
		if (nextTurn == 0) {
            System.out.println(" Spieler X:");
            figur = 'X';
            nextTurn = ~nextTurn;
        }
		else {
            System.out.println(" Spieler O:");
            figur = 'O';
            nextTurn = ~nextTurn;
        }
		
		assertEquals('O', figur);
	}

}
