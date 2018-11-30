package be.gertsch.vierGewinnt;

/**
 * Anzeigen der Informationen (Hilfe und Credits)
 * @author Marcel Gertsch
 * @version v1.1
 */

public class Anzeige {

	/**
	 * hilfeAnzeigen:
	 * 
	 * wurde die Zahl 99 eingegeben, wird hiermit die Spielanleitung ausgegeben.
	 */
	public void hilfeAnzeigen() {
		System.out.println("\n\nHilfe:");
		System.out.println("‾‾‾‾‾‾");
		System.out.println(" Bei Vier Gewinnt spielen abwechslungsweise die Spieler einen Stein in eine der Reihen 1-7.");
		System.out.println(" Ein Spieler muss jediglich 1-7 eintippen, je nach dem wo er den Spielstein haben möchte.");
		System.out.println(" Ziel des Spieles ist, 4 Steine in einer waagrechten, senkrechten oder diagonalen Linie zu haben.\n\n");
	}
	
	/**
	 * creditsAnzeigen:
	 * 
	 * wurde die Zahl 98 eingegeben, werden die Credits angezeigt.
	 */
	public void creditsAnzeigen() {
		System.out.println("\n\nCredits:");
		System.out.println("‾‾‾‾‾‾‾‾");
		System.out.println(" Herausgeber von Vier Gewinnt in Java: TOPOMEDICS");
		System.out.println(" Author: Marcel Gertsch");
		System.out.println("\n Version: 1.1 -- Veröffentlicht: 21. November 2018\n\n");
	}
}
