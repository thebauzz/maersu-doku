package collections;

import java.text.Collator;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;
import java.util.Locale;
import java.util.stream.Collectors;

public class ArrayListSortieren_TN {

	public void meineZahlen1(){
		List<Integer> integerListe = new ArrayList<Integer>();
		integerListe.add(10);
		integerListe.add(1);
		integerListe.add(100);
		integerListe.add(9);
		integerListe.add(25);
		integerListe.add(52);

		System.out.println(integerListe);
		System.out.println("-----------------");

		// Sorts the specified list into ascending order, according to the natural ordering of its elements
		Collections.sort(integerListe);
		System.out.println(integerListe);
		System.out.println("-----------------");

		// With Comparator
		// Sorts the specified list into reverse order, according to the natural ordering of its elements
		Collections.sort(intergerListe, Collections.reverseOrder());
		System.out.println(integerListe);
		System.out.println("-----------------");

		// With Lamdba (Ab Java 1.8)
 		// Sorts the specified list into ascending order, according to the natural ordering of its elements
		integerListe.sort((z1, z2) -> z1 - z2);
		System.out.println(integerListe);
		System.out.println("-----------------");

		// With Lamdba (Ab Java 1.8)
 		// Sorts the specified list into reverse order, according to the natural ordering of its elements
		integerListe.sort((z1, z2) -> z2 - z1);
		System.out.println(integerListe);
		System.out.println("-----------------");

		// Nur zur Info.
		List<Integer> neueListe = integerListe.stream().sorted((z1,z2)-> z1 - z2).collect(Collectors.toList());
		System.out.println(neueListe);
		System.out.println("-----------------");

	}

	public void meineStrings(){
		List<String> stringListe = new ArrayList<>();
		stringListe.add("Rot");
		stringListe.add("blau");
		stringListe.add("grün");
		stringListe.add("orange");
		stringListe.add("rot");
		stringListe.add("gelb");
		stringListe.add("gruen");

		System.out.println(stringListe);
		System.out.println("-----------------");

		Collections.sort(stringListe);
		System.out.println(stringListe);
		System.out.println("-----------------");

		Collections.sort(stringListe, Collections.reverseOrder());
		System.out.println(stringListe);
		System.out.println("-----------------");

		Collections.sort(stringListe, String.CASE_INSENSITIVE_ORDER);
		System.out.println(stringListe);
		System.out.println("-----------------");

		// Nur zur Info:
		// Mit Umlauten (sort sortiert normalerweise nach Unicode!)
		List<String> stringListe2 = Arrays.asList("muller", "Muller", "Mueller", "mueller", "Müller", "müller", "musste", "Test", "test", "Mullmann", "mullmann");
		System.out.println(stringListe2);
		System.out.println("-----------------");

		Collator collator = Collator.getInstance(Locale.GERMAN);
		collator.setStrength(Collator.IDENTICAL);
		Collections.sort(stringListe2, collator);
		System.out.println(stringListe2);
		System.out.println("-----------------");
	}

	public void meineObjekte(){
		List<Customer> customerListe = new ArrayList<>();
		customerListe.add(new Customer("4711", "Hans", "Meier"));
		customerListe.add(new Customer("1234", "Klaus", "Müller"));
		customerListe.add(new Customer("9999", "Klara", "Schmidt"));
		customerListe.add(new Customer("8345", "Lea", "Mueller"));
		customerListe.add(new Customer("4321", "Irene", "Heini"));
		customerListe.add(new Customer("5432", "Tina", "Schweizer"));

		System.out.println(customerListe);
		System.out.println("-----------------");

		customerListe.sort((p1,p2)->p1.getNachname().compareTo(p2.getNachname()));

		for (Customer s : customerListe) {
			System.out.println(s);
		}

		// Mit Comparator (anonyme Klasse) V1
		Collections.sort(customerListe, new Comparator<Customer>() {
			@Override
			public int compare(Customer p1, Customer p2) {
				return p1.getNachname().compareTo(p2.getNachname());
			}
		});

		for (Customer s : customerListe) {
			System.out.println(s);
		}


		// Mit Comparator (anonyme Klasse) V2
		customerListe.sort(new Comparator<Customer>() {
			@Override
			public int compare(Customer p1, Customer p2) {
				return p2.getNachname().compareTo(p1.getNachname());
			}
		});

		for (Customer s : customerListe) {
			System.out.println(s);
		}
	}

	public static void main(String[] args) {
		ArrayListSortieren_TN meineListe = new ArrayListSortieren_TN();
		System.out.println("Zahlen sortieren:");
		System.out.println("=================");
		meineListe.meineZahlen1();

		System.out.println("Strings sortieren:");
		System.out.println("==================");
		meineListe.meineStrings();

		System.out.println("Customer sortieren:");
		System.out.println("===================");
		meineListe.meineObjekte();
	}
}
