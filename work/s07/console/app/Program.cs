using System;
using System.Collections.Generic;
using System.IO;
using System.Text.Json;
namespace app
{
    class Program
    {

        static void Main(string[] args)
        {
            Console.WriteLine("Hello and welcome to the ");

            while (true)
            {
                menu();
            }
        }
        public static void menu()
        {
            Console.WriteLine("+-------------------------+");

            Console.WriteLine("|   Options:              |");
            Console.WriteLine("+-------------------------+");

            Console.WriteLine("|   #1  View accounts     |");
            Console.WriteLine("+-------------------------+");
            Console.WriteLine("|   #2 Choose account     |");
            Console.WriteLine("+-------------------------+");


            Console.WriteLine("|   #Type exit to... Exit |\n");

            String choice = Console.ReadLine();

            choice = choice.ToLower();
            Console.WriteLine("You chose " + choice);
            var accounts = ReadAccounts();

            switch (choice)
            {


                case "1": //View accounts from JSON

                    printAccBeautiful(accounts, 1);
                    break;

                case "2":
                    printAccBeautiful(accounts, 2);
                    break;
                case "exit":
                    Console.WriteLine("Bai bai bai");
                    System.Environment.Exit(1);

                    break;
            }


        }

        private static void getSpecificAccount()
        {
            var accounts = ReadAccounts();
            Console.WriteLine("Which account do you want to access?");

            String chosenAcc = Console.ReadLine();
            Console.WriteLine("Chosen account: " + chosenAcc);

            foreach (var account in accounts)
            {
                if (account.number.ToString().Equals(chosenAcc))
                {
                    Console.WriteLine("+________________________________________________________+");

                    Console.WriteLine("|   Account Number   |   Balance   |   Label   |   Owner   | ");
                    Console.WriteLine("|          " + account.number + "   |   "
                                        + account.balance
                                        + "         |    " + account.label
                                        + "     | " + account.owner + "   |");
                    Console.WriteLine("+________________________________________________________+");
                    return;
                }

            }

            Console.WriteLine("Account not found.... please try again");



        }


        private static void printAccBeautiful(IEnumerable<Account> accounts, int option)
        {


            TablePrinter tp = new TablePrinter("Number", "Balance", "Laberl", "Owner");
            switch (option)
            {
                case 1: //all accounts

                    foreach (var account in accounts)
                    {


                        tp.AddRow(account.number, account.balance, account.label, account.owner);
                    }
                    tp.Print();
                    break;
                case 2:  //one account
                    Console.WriteLine("Which account do you want to access?");

                    String chosenAcc = Console.ReadLine();
                    Console.WriteLine("Chosen account: " + chosenAcc);
                    foreach (var account in accounts)
                    {
                        if (account.number.ToString().Equals(chosenAcc))
                        {
                            tp.AddRow(account.number, account.balance, account.label, account.owner);

                        }
                    }
                    tp.Print();
                    

                    break;


            }



        }
        private static void printAllAccounts()
        {
            //List of accs 
            var accounts = ReadAccounts();

            foreach (var account in accounts)
            {

                Console.WriteLine("+________________________________________________________+");

                Console.WriteLine("|   Account Number   |   Balance   |   Label   |   Owner   | ");
                Console.WriteLine("|          " + account.number + "   |   "
                                    + account.balance
                                    + "         |    " + account.label
                                    + "     | " + account.owner + "   |");
                Console.WriteLine("+________________________________________________________+");


            }
            menu();


        }



        static IEnumerable<Account> ReadAccounts()
        {
            String file = "account.json";

            using (StreamReader r = new StreamReader(file))
            {
                string data = r.ReadToEnd();


                var json = JsonSerializer.Deserialize<Account[]>(
                    data,
                    new JsonSerializerOptions
                    {
                        PropertyNameCaseInsensitive = true
                    }
                );

                //Console.WriteLine(json[0]);
                return json;
            }
        }
    }



}




public class Account
{
    public int number { get; set; }
    public int balance { get; set; }

    public String label { get; set; }

    public String owner { get; set; }


    public override string ToString()
    {
        return JsonSerializer.Serialize<Account>(this);
    }

}




//Table beutifier borrowed from : https://stackoverflow.com/questions/856845/how-to-best-way-to-draw-table-in-console-app-c
//Thanks 