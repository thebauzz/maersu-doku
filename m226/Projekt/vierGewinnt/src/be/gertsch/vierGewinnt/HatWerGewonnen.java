package be.gertsch.vierGewinnt;

/**
 * Überprüft nach jedem Spielzug, ob es irgendwo eine 4er kombination gibt
 * @author Marcel Gertsch
 * @version v1.1
 */

public class HatWerGewonnen extends VierGewinnt {

	/**
	 * hatWerGewonnen:
	 * 
	 *  Pro Spielfigur (X & O) gibt es 4 Tests.
	 *  1: Senkrecht: Nimmt man den untersten Punkt einer 4er Reihe, so ist es nur in den untersten 3 Spalten möglich, zu gewinnen. (Höhe 4 + 3 nach oben, geht nicht
	 *  Daher wird jedes Feld von 0 bis 20 kontrolliert, ob 3 Felder darüber ebenfalls X oder O sind.
	 *  
	 *  2: Waagrecht: Nimmt man den rechten Punkt einer 4er Reihe, so ist es nur in den linken 4 Spalten möglich, zu gewinnen. (Spalte 5 + 3 nach Rechts geht nicht)
	 *  Daher wird jedes Feld von 0 bis 20 kontrolliert, ob 3 Felder darüber ebenfalls X oder O sind.
	 *  
	 *  Das selbe für schräg links & rechts. Einmal mit -8 überprüfen, das andere mal mit -6;
	 *  
	 *  Trifft eine Bedingung zu: So wird win=1 oder win=0 gesetzt, je nach dem wer gewonnen hat. um das Spiel zu beenden gameOver = true;
	 */
	public void hatWerGewonnen() {
	
		// Überprüft alle SENKRECHTEN Möglichkeiten für X
		for (int a = 0; a <= 20; a++) {
			if (feld[a] == 'X' && feld[a+7] == 'X' && feld[a+14] == 'X' && feld[a+21] == 'X') {
				win = 1;
				gameOver = true;
			}
		}
		
		// Überprüft alle WAAGRECHTE Möglichkeiten für X
		for (int a = 20; a >= 3; a--) {
			if (a == 37 || a == 36 || a == 35 || a == 30 || a == 29 || a == 28 || a == 23 || a == 22 || a == 21 || a == 16 || a == 15 || a == 14 || a == 9 || a == 8 || a == 7 ) {
				continue;
			}
			else if (feld[a] == 'X' && feld[a-1] == 'X' && feld[a-2] == 'X' && feld[a-3] == 'X') {
				win = 1;
				gameOver = true;
			}
		}
				
		// Überprüft alle SCHRÄG RECHTS Möglichkeiten für X
		for (int a = 20; a >= 3; a--) {
			if (a == 0 || a == 1 || a == 2 || a == 7 || a == 8 || a == 9 || a == 14 || a == 15 || a == 16 ) {
				continue;
			}
			else if (feld[a] == 'X' && feld[a+6] == 'X' && feld[a+12] == 'X' && feld[a+18] == 'X') {
				win = 1;
				gameOver = true;
			}
		}
		
		// Überprüft alle SCHRÄG LINKS Möglichkeiten für X
		for (int a = 0; a <= 20; a++) {
			if (a == 4 || a == 5 || a == 6 || a == 11 || a == 12 || a == 13 || a == 18 || a == 19 || a == 20 ) {
				continue;
			}
			else if (feld[a] == 'X' && feld[a+8] == 'X' && feld[a+16] == 'X' && feld[a+24] == 'X') {
				win = 1;
				gameOver = true;
			}
		}
		
		
		
		
		// Überprüft alle SENKRECHTEN Möglichkeiten für O
		for (int a = 0; a <= 20; a++) {
			if (feld[a] == 'O' && feld[a+7] == 'O' && feld[a+14] == 'O' && feld[a+21] == 'O') {
				win = 2;
				gameOver = true;
			}
		}
		
		// Überprüft alle WAAGRECHTE Möglichkeiten für O
		for (int a = 41; a >= 3; a--) {
			if (a == 37 || a == 36 || a == 35 || a == 30 || a == 29 || a == 28 || a == 23 || a == 22 || a == 21 || a == 16 || a == 15 || a == 14 || a == 9 || a == 8 || a == 7 ) {
				continue;
			}
			else if (feld[a] == 'O' && feld[a-1] == 'O' && feld[a-2] == 'O' && feld[a-3] == 'O') {
				win = 2;
				gameOver = true;
			}
		}
		
		// Überprüft alle SCHRÄG RECHTS Möglichkeiten für O
		for (int a = 20; a >= 3; a--) {
			if (a == 0 || a == 1 || a == 2 || a == 7 || a == 8 || a == 9 || a == 14 || a == 15 || a == 16 ) {
				continue;
			}
			else if (feld[a] == 'O' && feld[a+6] == 'O' && feld[a+12] == 'O' && feld[a+18] == 'O') {
				win = 2;
				gameOver = true;
			}
		}
		
		// Überprüft alle SCHRÄG LINKS Möglichkeiten für O
		for (int a = 0; a <= 20; a++) {
			if (a == 4 || a == 5 || a == 6 || a == 11 || a == 12 || a == 13 || a == 18 || a == 19 || a == 20 ) {
				continue;
			}
			else if (feld[a] == 'O' && feld[a+8] == 'O' && feld[a+16] == 'O' && feld[a+24] == 'O') {
				win = 2;
				gameOver = true;
			}
		}
	}
}
