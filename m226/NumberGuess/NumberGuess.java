package be.gertsch.number;

import be.gertsch.utils.ConsoleReader;

public class NumberGuess {
	public static void main(String[] args) {
		back: while(true) {

		int zaehler = 1;
		int low = 0;
		int diff = 50;
		int high = 100;
		int half = 50;

		int zahl = ConsoleReader.readInteger("Geben Sie eine Zahl zwischen 0 und 100 ein die ich erraten soll");
			do {
				String gk = ConsoleReader.readString("Ist die Zahl grösser oder kleiner als " + half + " (g/k -- restart)");

				if (gk.equals("k")) {
					high = high - diff;
					if (diff < 2) {
						diff = 1;
					}
					else {
						diff = diff / 2;
					}
					half = ((high - low) / 2) + low;
				}

				else if (gk.equals("g")) {
					low = low + diff;
					if (diff < 2) {
						diff = 1;
					}
					else {
						diff = diff / 2;
					}
					half = ((high - low) / 2) + low;
				}
				else if (gk.equals("restart")) {
					continue back;
				}
				zaehler += 1;
			} while(zahl != half);

			System.out.println("Die Zahl ist " + zahl);
			System.out.println("Ich habe " + zaehler + " Versuche gebraucht.");
		}
	}
}
