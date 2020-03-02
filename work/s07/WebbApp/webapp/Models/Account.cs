using System;
using System.Collections.Generic ;
//using System.IO;
using System.Text.Json;
//using System.Text.Json.Serialization;

namespace webapp.Models
{
    public class Account
    {
        public int Number { get; set; }
        public int Balance { get; set; }
        public string Label { get; set; }
        public int Owner { get; set; }
        
        public override string ToString() =>
            JsonSerializer.Serialize<Account>(this);
    }
}
