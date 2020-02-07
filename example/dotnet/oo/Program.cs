/**
 * Read on classes and OO
 * https://docs.microsoft.com/en-us/dotnet/csharp/programming-guide/classes-and-structs/classes
 */﻿
using System;

namespace oo
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Instantiate an object and use it, class saved in separate file.");

            // Call the constructor that has no parameters.
            var person1 = new Person();
            Console.WriteLine(person1.Name);

            // Call the constructor that has one parameter.
            var person2 = new Person("Sarah Jones");
            Console.WriteLine(person2.Name);
            // Get the string representation of the person2 instance.
            Console.WriteLine(person2);

            Console.WriteLine("Press any key to exit.");
            Console.ReadKey();        }
    }
}
