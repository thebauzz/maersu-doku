package collections;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

public class ArrayListDurchlaufenT_TN {

   public static void main(String[] args) {

      List<String> a = new ArrayList<String>();

      a.add("un");
      a.add("deux");
      a.add("trois");
      a.add("quatre");
      a.add("quatre");

      // Variante 1 nach Oracle
      /* In JDK 8 and later, the preferred method of iterating over a collection is to obtain a stream
       * and perform aggregate operations on it:
       */
       a.stream().forEach(e -> System.out.println(e));

      // Variante 1a + 1b
      a.forEach(e -> System.out.println(e));
      a.forEach(System.out::println);

      // Variante 2 nach Oracle (for-each)
      /* This construct hides the iterator, so you cannot call remove.
       * Therefore, the for-each construct is not usable for filtering.
       * Iterate over multiple collections in parallel.
       */
      for (String s : a) {
    	  // Element ausgeben
        System.out.println(s);
      }

      // Variante 3 nach Oracle
      /*
       * An Iterator is an object that enables you to traverse through a collection
       * and to remove elements from the collection selectively, if desired.
       */
      for (Iterator<String> iter = a.iterator(); iter.hasNext();  ) {
          // Element ausgeben
          System.out.println(iter.next());
      }

      // Variante X
      for (int i = 0; i < a.size(); i++) {
          System.out.println(a.get(i));
         }

      // Variante Y
      Iterator<String> li = a.listIterator();

      while(li.hasNext()) {
      	System.out.println(li.next());
      }
   }
}
