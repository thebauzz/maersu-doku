/*
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details. http://www.gnu.org
 */

package be.gertsch.utils;

import java.io.*;

/**
 * ConsoleReader, eine einfache utility-Klasse fuer Textkonsoleneingabe
 *
 * Diese Klasse dient dazu, in einem textkonsolenbasierten Javaprogramm
 * einfache typsichere Eingaben zu machen.
 *
 * Verwendung:
 * 		int zahl = utils.ConsoleReader.readInteger("Bitte ganze Zahl eingeben");
 *
 * 		analog geht es, wenn andere Datentypen vom Benutzer verlangt werden sollen
 *
 * <p>
 * (C) Copyright 2004 by Markus Ruggiero, rucotec GmbH, Basel
 * @author Markus Ruggiero <markus@ruggiero.ch>
*/

/*
 * History:
 * -------
 * Sommer 2004	V0.9	mr	erstellt
 * Nov. 2004	V1.0	mr	fertig kommentiert
 *
 */
public abstract class ConsoleReader {

    /**
     * Ein buffered reader als Singleton.
     *
     * Wird von allen Methoden verwendet, um von der Console zu lesen
     */
    private static BufferedReader reader = new BufferedReader(
                    new InputStreamReader(
                                    System.in));

    /**
     * ConsoleReader default constructor.
     *
     * Ist private, damit es nicht moeglich ist, Objekte der Klasse zu erstellen.
     * Alle Methoden sind static
     */

    private ConsoleReader() {
        super();
    }

    /**
     * Liest ein einzelnes Zeichen von der Console ein
     *
     * @param prompt Eingabeaufforderung
     * @return das eingelesene Zeichen
     */
    public static char readChar(String prompt)
    {
        char value = 0;
        while (true)
        {
            try
            {
                System.out.print(prompt + ": ");
                value = (char) reader.read();
                // alternative	value = (char)reader.readLine().charAt(0);
                break;
            }
            catch (IOException ex)
            {
                System.out.println("*** Read Error ***");
                System.out.println("*** " + ex.getMessage());
                System.exit(1);
            }
        }
        return value;
    }


    /**
     * Liest einen double-Wert von der Console ein
     *
     * @param prompt Eingabeaufforderung
     * @return der eingegebene Wert
     */
    public static double readDouble(String prompt)
    {
        double value = 0.0;
        System.out.print(prompt + ": ");
        while (true)
        {
            try
            {
                value = Double.valueOf(reader.readLine()).doubleValue();
                break;
            }
            catch (IOException ex)
            {
                System.out.println("*** Read Error ***");
                System.out.println("*** " + ex.getMessage());
                System.exit(1);
            }
            catch (NumberFormatException ex)
            {
                System.out.println("*** Conversion Error ***, try again");
            }
        }
        return value;
    }

    /**
     * Liest einen int-Wert von der Console ein
     *
     * @param prompt Eingabeaufforderung
     * @return der eingegebene Wert
     */
    public static int readInteger(String prompt)
    {
        int value = 0;
        while (true)
        {
            try
            {
                System.out.print(prompt + ": ");
                value = Integer.valueOf(reader.readLine()).intValue();
                break;
            }

            catch (IOException ex)
            {
                System.out.println("*** Read Error ***");
                System.out.println("*** " + ex.getMessage());
                System.exit(1);
            }
            catch (NumberFormatException ex)
            {
                System.out.println("*** Conversion Error ***, try again");
            }
        }
        return value;
    }

    /**
     * Liest einen long-Wert von der Console ein
     *
     * @param prompt Eingabeaufforderung
     * @return der eingegebene Wert
     */
    public static long readLong(String prompt)
    {
        long value = 0;
        while (true)
        {
            try
            {
                System.out.print(prompt + ": ");
                value = Long.valueOf(reader.readLine()).longValue();
                break;
            }
            catch (IOException ex)
            {
                System.out.println("*** Read Error ***");
                System.out.println("*** " + ex.getMessage());
                System.exit(1);
            }
            catch (NumberFormatException ex)
            {
                System.out.println("*** Conversion Error ***, try again");
            }
        }
        return value;
    }

    /**
     * Liest einen String von der Console ein
     *
     * @param prompt Eingabeaufforderung
     * @return der eingegebene Wert
     */
    public static String readString(String prompt)
    {
        String value = "";
        while (true)
        {
            try
            {
                System.out.print(prompt + ": ");
                value = reader.readLine();
                break;
            }
            catch (IOException ex)
            {
                System.out.println("*** Read Error ***");
                System.out.println("*** " + ex.getMessage());
                System.exit(1);
            }
        }
        return value;
    }
}
