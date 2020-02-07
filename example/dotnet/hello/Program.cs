/**
 * Read more examples in the tutorials
 * https://docs.microsoft.com/en-us/dotnet/csharp/tutorials/
 */﻿
using System;

namespace hello
{
    class Program
    {
        static void Decimal() {
            decimal min = decimal.MinValue;
            decimal max = decimal.MaxValue;

            Console.WriteLine($"The range of the decimal type is {min} to {max}");
        }

        private static void Statement() {
            int a = 5;
            int b = 6;
            if (a + b > 10)
            {
                Console.WriteLine("The answer is greater than 10.");
            }
            else
            {
                Console.WriteLine("The answer is NOT greater than 10.");
            }
        }

        public static void Iterate() {
            int counter = 0;
            while (counter < 10)
            {
                Console.WriteLine($"Hello World! The counter is {counter}");
                counter++;
            }

            counter = 0;
            do
            {
                Console.Write($"{counter}, ");
                counter++;
            } while (counter < 10);
            Console.WriteLine();
            
            for (int index = 0; index < 10; index++)
            {
                Console.WriteLine($"Hello World! The index is {index}");
            }
        }

        static int Main(string[] args)
        {
            string name = "Mikael";
            
            Console.WriteLine("Hello World! " + name);
            Console.WriteLine($"Hello World! {name}");

            Console.WriteLine("The current time is " + DateTime.Now);

            int a = 18;
            int b = 6;
            int c = a + b;
            Console.WriteLine(c);

            int max = int.MaxValue;
            int min = int.MinValue;
            Console.WriteLine($"The range of integers is {min} to {max}");

            int what = max + 3;
            Console.WriteLine($"An example of overflow: {max} + 3 = {what}");

            double third = 1.0 / 3.0;
            Console.WriteLine(third);

            Decimal();
            
            Console.WriteLine($"PI = {Math.PI}");

            Statement();

            Iterate();

            // Print out the incoming variables
            Console.WriteLine("Here are the incoming arguments from the command line:");
            foreach(var item in args)
            {
                Console.WriteLine(item.ToString());
            }

            //return 1;
            return 0;
        }
    }
}
