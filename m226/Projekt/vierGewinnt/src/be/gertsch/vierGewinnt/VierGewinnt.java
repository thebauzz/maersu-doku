package be.gertsch.vierGewinnt;

import be.gertsch.utils.ConsoleReader;

/**
 * Hauptklasse. Hier ist der Start des Programms und die Definition aller Variablen
 * @author Marcel Gertsch
 * @version v1.1
 */
public class VierGewinnt {

	/**
	 * Main: Dient dazu, dass das Spiel neu gestartet werden kann.
	 * ist aufhoehren = true; dann ist die while-Schlaufe beendet.
	 */
	static boolean aufhoehren = false;
	
	/**
	 * Main: Solange es keinen Gewinner (oder Untentschieden) gibt, ist gameOver = false;
	 */
	static boolean gameOver = false;
	
	/**
	 * Main: computer true = Spieler vs Computer; computer false = Spieler vs Spieler;
	 */
	static boolean computer;
	
	/**
	 * Main: Da es 42 Spielfelder gibt, muss das Spiel bei 42 Zügen aufhören. Dazu dient Zähler.
	 */
	static int zaehler = 0;
	
	/**
	 * Main: Je nach dem wer gewinnt, unterscheidet sich der Wert von win.
	 */
	static int win;
	
	/**
	 * Spielfeld: Copyright Text, der überall eingefügt wird.
	 */
	public static String copyright = " ® 2018 TOPOMEDICS - v1.0 M.Gertsch";
	
	/**
	 * Spielfeld: Die Liste für das Spielfeld (42 Werte insgesamt -> 0 bis 41);
	 */
	static char[] feld = new char[42];
	
	/**
	 * Spieler: Definiert, welcher Sieler dran ist. 0=x, 1=O
	 */
	static int nextTurn = 0;
	
	/**
	 * Spieler: Welcher Wert auch immer figur ist, dieser Wert kommt in das Spielfeld hinein
	 */
	public static char figur = 'X';
	
	/**
	 * Spieler: In welche Reihe soll der Spielstein eingefügt werden
	 */
	int reihe = 0;
	
	/**
	 * Hauptablauf
	 * 
	 * Schlaufe 1: Läuft durch, bis der Sieler entscheidet, er möchte nicht mehr weiter spielen.
	 * Schlaufe 2: 1 Durchlauf = 1 Spielzug (Eingabe von Spieler verlangen; Spielfeld Ausgabe; Checken ob jemand gewonnen 
	 */
	public static void main(String[] args) {
		
		/**
		 *  Erstellen aller Objekte
		 */
		Spielfeld spiel = new Spielfeld();
		SpielerVsSpieler player = new SpielerVsSpieler();
		SpielerVsComputer pc = new SpielerVsComputer();
		HatWerGewonnen sieger = new HatWerGewonnen();
		
		/**
		 *  Gesamter Spielablauf. Hier landet der Spieler, wenn er mehr als einmal spielen will.
		 */
		while(aufhoehren == false) {
			System.out.println(copyright);
			System.out.println("Willkommen bei 4-Gewinnt!");
			
			/**
			 * Entscheid fällen ob Computer oder Spieler als Gegner
			 */
			String computer_spieler = ConsoleReader.readString("Möchten Sie gegen den Computer spielen? (Y/n)");
			if (computer_spieler.equalsIgnoreCase("n") || computer_spieler.equalsIgnoreCase("no")) {
				computer = false;
				System.out.println("\n\n\n");
			}
			else {
				computer = true;
				System.out.println("\n\n\n");
			}
			
			/**
			 * Spielablauf wenn Spieler gegen Spieler
			 */
			if (computer == false) {
				spiel.spielStart();
				/**
				 *  While Schlaufe für ein Spiel. Entweder 42 Züge oder bis jemand gewonnen hat.
				 */
				while (gameOver == false) {
					player.werIstDran();
					int reihe = player.getReihe();
					char figur = player.getFigur();
					spiel.printSpielfeld(reihe, figur);
					
					sieger.hatWerGewonnen();
					
					zaehler += 1;
					if (zaehler == 42) { // 6 * 7 = Maximal 42 Züge
						win = 4;
						gameOver = true;
					}
				}
				
				if (win == 1) {
					System.out.println(" Spieler X hat gewonnen. Glückwunsch!");
				}
				else if (win == 2) {
					System.out.println(" Spieler O hat gewonnen. Glückwunsch!");
				}
				if (win == 3) {
					System.out.println(" Unentschieden!");
					System.out.println(" Alle Züge wurden aufgebraucht.");
				}
				/**
				 * Erneut spielen?
				 * 
				 * Solange etwas anderes als n, N, no oder NO eingegeben wird, startet das Spiel neu
				 * else: setzt alles zurück. Spieler X beginnt wieder
				 */
				String ja_nein = ConsoleReader.readString(" Wollen Sie nochmals spielen? (Y/n)");
				if (ja_nein.equalsIgnoreCase("n") || ja_nein.equalsIgnoreCase("no")) {
					System.out.println(" Vielen Dank für das Spielen von 4-Gewinnt von Marcel Gertsch!");
					aufhoehren = true;
				}
				else {
					nextTurn = 0;
					gameOver = false;
					win = 0;
					for (int i = 0; i < 100; ++i) System.out.println();
				}
			}
			
			/**
			 * Spielablauf wenn Spieler gegen Computer
			 */
			if (computer == true) {
				spiel.spielStart();
				while (gameOver == false) {
					
					pc.spielerTurn();
					int reihe = pc.getReihe();
					figur = 'X';
					spiel.printSpielfeld(reihe, figur);
		
					sieger.hatWerGewonnen();
					zaehler += 1;
					if (zaehler == 42) { // 6 * 7 = Maximal 42 Züge
						win = 4;
						gameOver = true;
					}
					
					pc.computerTurn();
					reihe = pc.getReihe();
					figur = 'O';
					spiel.printSpielfeld(reihe, figur);
					
					sieger.hatWerGewonnen();
					if (win == 2) { win = 3; }
					
					zaehler += 1;
					if (zaehler == 42) { // 6 * 7 = Maximal 42 Züge
						win = 4;
						gameOver = true;
					}
				
				}
				
				if (win == 1) {
					System.out.println(" Spieler X hat gewonnen. Glückwunsch!");
				}
				else if (win == 2) {
					System.out.println(" Spieler O hat gewonnen. Glückwunsch!");
				}
				else if (win == 3) {
					System.out.println(" Der Computer hat gewonnen. Viel Glück beim nächsten Mal!");
				}
				if (win == 4) {
					System.out.println(" Unentschieden!");
					System.out.println(" Alle Züge wurden aufgebraucht.");
				}
				/**
				 * Erneut spielen?
				 * 
				 * Solange etwas anderes als n, N, no oder NO eingegeben wird, startet das Spiel neu
				 * else: setzt alles zurück. Spieler X beginnt wieder
				 */
				String ja_nein = ConsoleReader.readString(" Wollen Sie nochmals spielen? (Y/n)");
				if (ja_nein.equalsIgnoreCase("n") || ja_nein.equalsIgnoreCase("no")) {
					System.out.println(" Vielen Dank für das Spielen von 4-Gewinnt von Marcel Gertsch!");
					aufhoehren = true;
				}
				else {
					nextTurn = 0;
					gameOver = false;
					win = 0;
					for (int i = 0; i < 100; ++i) System.out.println();
				}
			}
		}
	}
}
