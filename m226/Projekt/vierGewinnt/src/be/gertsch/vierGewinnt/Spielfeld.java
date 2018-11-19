package be.gertsch.vierGewinnt;

import java.util.Arrays;

/**
 * In dieser Klasse ist alles rund um das Spielfeld. Es sagt, wo welcher Spielstein eingefügt und dargestellt werden soll.
 * @author Marcel Gertsch
 * @version v1.1
 */
public class Spielfeld extends VierGewinnt {
	
	/**
	 *  spielStart:
	 *  
	 *  Anfangsbegrüssung
	 *  Das wichtigste Zeile 27: feld[0 - 41] erhalten den Wert eines char, welcher leer ist.
	 */
	public void spielStart() {
		
		System.out.println(copyright);
		System.out.println("Willkommen bei 4-Gewinnt!");
		System.out.println("Für eine Spielanleitung, geben Sie 99 ein.");
		System.out.println("Für die Credits, geben Sie 98 ein.");
		
		System.out.println("\n\n|---|---|---|---|---|---|---|");
		// Von 41 runterzählen -> Feld oben links ist 41; Feld unten rechts ist 0;
		for (int f = feld.length - 1; f >= 0; f--) {

			feld[f] = ' ';
			System.out.print("| ");
			System.out.print(feld[f]+" ");
			System.out.print("");
			
			// Nach jedem 7 Feld wird ein Linebreak gemacht.
			if (f == 7 || f == 14 || f == 21 || f == 28 || f == 35) {
				System.out.print("|\n|---|---|---|---|---|---|---|\n");
			}
		}
		System.out.println("|\n|---|---|---|---|---|---|---|");
		System.out.println("  1   2   3   4   5   6   7 ");
	}
	
	/**
	 * printSpielfeld:
	 * 
	 * Beispiel Reihe 7:
	 * Ist oberstes Feld ausgefüllt? Ja = Reihe voll, Nein = weiter suchen.
	 * ist zweioberstes Feld ausgefüllt? Ja = oberstes Feld ausfüllen, Nein = weiter suchen.
	 * ist drittoberstes Feld ausgefüllt? Ja = zweitoberstes Feld ausfüllen, Nein = weiter suchen, etc...
	 * 
	 * @param reihe die Eingabe der Reihe, welche der Spieler gemacht hat.
	 * @param figur je nach dem welcher Spieler dran ist, wird das Zeichen mit X oder O ersetzt.
	 */
	public void printSpielfeld(int reihe, char figur) {

		SpielerVsSpieler player = new SpielerVsSpieler();
		
		switch(reihe) {
		case 7:
			if ( !(feld[35] == ' ') ) {
				player.maxHoehe();
				break;
			}
			if ( !(feld[28] == ' ') && (feld[35] == ' ') ) {
				feld[35] = figur;
				break;
			}
			if ( !(feld[21] == ' ') && (feld[28] == ' ') ) {
				feld[28] = figur;
				break;
			}
			if ( !(feld[14] == ' ') && (feld[21] == ' ') ) {
				feld[21] = figur;
				break;
			}
			if ( !(feld[7] == ' ') && (feld[14] == ' ') ) {
				feld[14] = figur;
				break;
			}
			if ( !(feld[0] == ' ') && (feld[7] == ' ') ) {
				feld[7] = figur;
				break;
			}
			if (feld[0] == ' ') {
				feld[0] = figur;
				break;
			}
			break;
		case 6:
			if ( !(feld[36] == ' ') ) {
				player.maxHoehe();
				break;
			}
			if ( !(feld[29] == ' ') && (feld[36] == ' ') ) {
				feld[36] = figur;
				break;
			}
			if ( !(feld[22] == ' ') && (feld[29] == ' ') ) {
				feld[29] = figur;
				break;
			}
			if ( !(feld[15] == ' ') && (feld[22] == ' ') ) {
				feld[22] = figur;
				break;
			}
			if ( !(feld[8] == ' ') && (feld[15] == ' ') ) {
				feld[15] = figur;
				break;
			}
			if ( !(feld[1] == ' ') && (feld[8] == ' ') ) {
				feld[8] = figur;
				break;
			}
			if (feld[1] == ' ') {
				feld[1] = figur;
				break;
			}
			break;
		case 5:
			if ( !(feld[37] == ' ') ) {
				player.maxHoehe();
				break;
			}
			if ( !(feld[30] == ' ') && (feld[37] == ' ') ) {
				feld[37] = figur;
				break;
			}
			if ( !(feld[23] == ' ') && (feld[30] == ' ') ) {
				feld[30] = figur;
				break;
			}
			if ( !(feld[16] == ' ') && (feld[23] == ' ') ) {
				feld[23] = figur;
				break;
			}
			if ( !(feld[9] == ' ') && (feld[16] == ' ') ) {
				feld[16] = figur;
				break;
			}
			if ( !(feld[2] == ' ') && (feld[9] == ' ') ) {
				feld[9] = figur;
				break;
			}
			if (feld[2] == ' ') {
				feld[2] = figur;
				break;
			}
			break;
		case 4:
			if ( !(feld[38] == ' ') ) {
				player.maxHoehe();
				break;
			}
			if ( !(feld[31] == ' ') && (feld[38] == ' ') ) {
				feld[38] = figur;
				break;
			}
			if ( !(feld[24] == ' ') && (feld[31] == ' ') ) {
				feld[31] = figur;
				break;
			}
			if ( !(feld[17] == ' ') && (feld[24] == ' ') ) {
				feld[24] = figur;
				break;
			}
			if ( !(feld[10] == ' ') && (feld[17] == ' ') ) {
				feld[17] = figur;
				break;
			}
			if ( !(feld[3] == ' ') && (feld[10] == ' ') ) {
				feld[10] = figur;
				break;
			}
			if (feld[3] == ' ') {
				feld[3] = figur;
				break;
			}
			break;
		case 3:
			if ( !(feld[39] == ' ') ) {
				player.maxHoehe();
				break;
			}
			if ( !(feld[32] == ' ') && (feld[39] == ' ') ) {
				feld[39] = figur;
				break;
			}
			if ( !(feld[25] == ' ') && (feld[32] == ' ') ) {
				feld[32] = figur;
				break;
			}
			if ( !(feld[18] == ' ') && (feld[25] == ' ') ) {
				feld[25] = figur;
				break;
			}
			if ( !(feld[11] == ' ') && (feld[18] == ' ') ) {
				feld[18] = figur;
				break;
			}
			if ( !(feld[4] == ' ') && (feld[11] == ' ') ) {
				feld[11] = figur;
				break;
			}
			if (feld[4] == ' ') {
				feld[4] = figur;
				break;
			}
			break;
		case 2:
			if ( !(feld[40] == ' ') ) {
				player.maxHoehe();
				break;
			}
			if ( !(feld[33] == ' ') && (feld[40] == ' ') ) {
				feld[40] = figur;
				break;
			}
			if ( !(feld[26] == ' ') && (feld[33] == ' ') ) {
				feld[33] = figur;
				break;
			}
			if ( !(feld[19] == ' ') && (feld[26] == ' ') ) {
				feld[26] = figur;
				break;
			}
			if ( !(feld[12] == ' ') && (feld[19] == ' ') ) {
				feld[19] = figur;
				break;
			}
			if ( !(feld[5] == ' ') && (feld[12] == ' ') ) {
				feld[12] = figur;
				break;
			}
			if (feld[5] == ' ') {
				feld[5] = figur;
				break;
			}
			break;
		case 1:
			if ( !(feld[41] == ' ') ) {
				player.maxHoehe();
				break;
			}
			if ( !(feld[34] == ' ') && (feld[41] == ' ') ) {
				feld[41] = figur;
				break;
			}
			if ( !(feld[27] == ' ') && (feld[34] == ' ') ) {
				feld[34] = figur;
				break;
			}
			if ( !(feld[20] == ' ') && (feld[27] == ' ') ) {
				feld[27] = figur;
				break;
			}
			if ( !(feld[13] == ' ') && (feld[20] == ' ') ) {
				feld[20] = figur;
				break;
			}
			if ( !(feld[6] == ' ') && (feld[13] == ' ') ) {
				feld[13] = figur;
				break;
			}
			if (feld[6] == ' ') {
				feld[6] = figur;
				break;
			}
			break;
		}
		System.out.println("\n\n|---|---|---|---|---|---|---|");
		for (int f = feld.length - 1; f >= 0; f--) {
			
			System.out.print("| ");
			System.out.print(feld[f]+" ");
			System.out.print("");
			
			if (f == 7 || f == 14 || f == 21 || f == 28 || f == 35) {
				System.out.print("|\n|---|---|---|---|---|---|---|\n");
			}
		}
		System.out.println("|\n|---|---|---|---|---|---|---|");
		System.out.println("  1   2   3   4   5   6   7  \n");
		System.out.println(Arrays.toString(feld));
	}
}