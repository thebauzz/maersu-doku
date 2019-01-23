package uebung72;

import java.util.Comparator;
import java.util.Iterator;
import java.util.LinkedList;

public class VerketteteListe {

	private VerketteteListe() {
    LinkedList<Integer> linkedlist = new LinkedList<Integer>();

    linkedlist.add(4);
    linkedlist.add(6);
    linkedlist.add(7);
    linkedlist.add(10);
    linkedlist.add(12);
		linkedlist.addFirst(2);
    System.out.println(linkedlist); 	// Gewünschte Output:  [2, 4, 6, 7, 10, 12]

    linkedlist.addLast(14);
    linkedlist.add(4, 8);
    System.out.println(linkedlist);		// Gewünschte Output:  [2, 4, 6, 7, 8, 10, 12, 14]

    linkedlist.set(4, 88);
    System.out.println(linkedlist);		// Gewünschte Output:  [2, 4, 6, 7, 88, 10, 12, 14]

    linkedlist.removeLast();
    System.out.println(linkedlist);		// Gewünschte Output:  [2, 4, 6, 7, 88, 10, 12]

    linkedlist.remove(3);
    System.out.println(linkedlist);		// Gewünschte Output:  [2, 4, 6, 88, 10, 12]

    // Siehe: http://www.java67.com/2016/02/how-to-sort-linkedlist-in-java-example.html
    linkedlist.sort(Comparator.naturalOrder());
    // ODER
//    Collections.sort(linkedlist);
    System.out.println(linkedlist);		// Gewünschte Output:  [2, 4, 6, 10, 12, 88]

    // oder in der anderen Richtung
    linkedlist.sort(Comparator.reverseOrder());
//    Collections.reverse(linkedlist);
    // ODER
    System.out.println(linkedlist);		// Gewünschte Output:  [88, 12, 10, 6, 4, 2]

    // Quersumme berechnen (1) (Modern)
    int quersumme = 0;
    for(int zahl: linkedlist)
    {
  	  quersumme = quersumme + zahl;
    }
    System.out.println(quersumme);		// Gewünschte Output:  122


    // Quersumme berechnen (2) (Vor Java 8)
    quersumme = 0;
    Iterator<Integer> i = linkedlist.iterator();
    while (i.hasNext()) {
  	  quersumme = quersumme + i.next();
    }
    System.out.println(quersumme);

    /*
	foreach (erstes Beispiel:
		The foreach loop uses an Iterator behind the scenes

    ABER

    Iterator Advantage:
        Ability to remove elements from Collections.
        Ability to move forward and backward using next() and previous().
    */
  }


	public static void main(String[] args) {
		new VerketteteListe();
	}

}
