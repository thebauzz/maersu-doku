package be.gertsch.vierGewinnt;

import be.gertsch.utils.ConsoleReader;

/**
 * Klasse wird gebraucht, falls der Spieler gegen den Computer spielen will.
 * @author Marcel Gertsch
 * @version v1.1
 */

public class SpielerVsComputer extends VierGewinnt {

	/**
	 * spielerTurn:
	 * 
	 * Verlangt eine gültige Eingabe des Benutzer.
	 */
	public void spielerTurn() {
		
		reihe = 0;
		while (reihe > 7 || reihe < 1) { 
			reihe = ConsoleReader.readInteger(" Bitte geben Sie eine Zahl zwischen 1 und 7 ein");
			System.out.println("\n\n"+copyright);
			if (reihe == 99) {
				Anzeige help = new Anzeige();
				help.hilfeAnzeigen();
			}
			if (reihe == 98) {
				Anzeige credit = new Anzeige();
				credit.creditsAnzeigen();
			}
		}
	}
	
	/**
	 * computerTurn:
	 * 
	 * Generiert eine zufällige Zahl zwischen 1-7. Ist bei der Reihe das MAX erreicht, dann nochmals generieren.
	 */
	public void computerTurn(int spielerReihe) {
		boolean weiter = false;
		while(!weiter) {
			reihe = (int) (Math.random() * ((7 - 1) + 1)) + 1;
			if (reihe <= spielerReihe + 2 && reihe >= spielerReihe - 2) {
				switch(reihe) {
				case 1:
					if (feld[41] == ' ') {
						weiter = true;
						break;
					}
					else { weiter = false; }
				case 2:
					if (feld[40] == ' ') {
						weiter = true;
						break;
					}
					else { weiter = false; }
				case 3:
					if (feld[39] == ' ') {
						weiter = true;
						break;
					}
					else { weiter = false; }
				case 4:
					if (feld[38] == ' ') {
						weiter = true;
						break;
					}
					else { weiter = false; }
				case 5:
					if (feld[37] == ' ') {
						weiter = true;
						break;
					}
					else { weiter = false; }
				case 6:
					if (feld[36] == ' ') {
						weiter = true;
						break;
					}
					else { weiter = false; }
				case 7:
					if (feld[35] == ' ') {
						weiter = true;
						break;
					}
					else { weiter = false; }
				}
			}
		}
	}
	
	/**
	 * getReihe:
	 * @return Rückgabewert der Reihe
	 */
	public int getReihe() {
		return reihe;
	}
}