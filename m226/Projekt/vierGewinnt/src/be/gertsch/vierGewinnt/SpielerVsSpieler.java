package be.gertsch.vierGewinnt;

import be.gertsch.utils.ConsoleReader;

/**
 * Definiert, welcher Spieler am Zug ist und nimmt die Eingabe
 * @author Marcel Gertsch
 * @version v1.1
 */

public class SpielerVsSpieler extends VierGewinnt {

	/**
	 * werIstDran:
	 * 
	 * Wechselt Wert von Figur bei jedem Zug;
	 * überprüft die Eingabe des Benutzers, ob sie gültig ist.
	 */
	public void werIstDran() {
		
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
		
		reihe = 0;
		while (reihe > 7 || reihe < 1) { 
			reihe = ConsoleReader.readInteger(" Bitte geben Sie eine Zahl zwischen 1 und 7 ein");
			if (reihe == 99) {
				Anzeige help = new Anzeige();
				help.hilfeAnzeigen();
			}
		}
	}
	
	/**
	 * maxHoehe:
	 * 
	 * Wurde in einer Reihe die maximale Höhe bereits erreicht (Felder 35-41 ausgefüllt) wird diese Methode ausgeführt.
	 */
	public void maxHoehe() {
		reihe = 0;
		while (reihe > 7 || reihe < 1) {
			System.out.println(" Diese Reihe hat die maximale Höhe bereits erreicht.");
			reihe = ConsoleReader.readInteger(" Bitte geben Sie eine Zahl zwischen 1 und 7 ein");
		}
		
		Spielfeld spiel = new Spielfeld();
		spiel.printSpielfeld(reihe, figur);
	}
	
	/**
	 * getReihe:
	 * @return Rückgabewert der Eingabe vom Benutzer, in welcher Reihe er den Stein platzieren möchte.
	 */
	public int getReihe() {
		return reihe;
	}
	
	/**
	 * getFigur:
	 * @return Rückgabewert der Figur. Je nach dem welcher Spieler dran ist, "O" oder "X".
	 */
	public char getFigur() {
		return figur;
	}
}