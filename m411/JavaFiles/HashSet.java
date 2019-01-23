package collections;

import java.util.Collections;
import java.util.Enumeration;
import java.util.HashSet;
import java.util.Iterator;
import java.util.Set;

public class HashSet_TN {

	private void HashSetExperiment () {
//		HashSet<String> meinSet = new HashSet<String>();
		Set<String> meinSet = new HashSet<String>();

		meinSet.add("Genf");
		meinSet.add("Lausanne");
		meinSet.add("Freiburg");
		meinSet.add("Bern");
		meinSet.add("Bern");

		// Kontrolle:
		// Was stellen Sie fest?
		// Bern kommt nur einmal vor
		System.out.println(meinSet);
		// Ist "Lausanne" schon im Set?
		System.out.println(meinSet.contains("Lausanne"));
		// "Lausanne" entfernen und danach Erfolg kontrollieren
		meinSet.remove("Lausanne")
		System.out.println(meinSet.contains("Lausanne"));

		for (String element : meinSet) {
			System.out.println(element.getClass().getName() + ": " + element);
			System.out.println(element.hashCode());
		}
	}

	public static void main(String[] args) {
		HashSet_TN exp = new HashSet_TN();
		exp.HashSetExperiment();
	}
}
