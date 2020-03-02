using System.Collections.Generic;
using Microsoft.AspNetCore.Mvc;
using webapp.Models;
using webapp.Services;
using System.Text.Json;
using System.Text.Json.Serialization;
using System.Linq;


namespace webapp.Controllers
{
    [ApiController]
    [Route("api/[controller]")]
    public class AccountsController : ControllerBase {
        public AccountsController(JsonFileAccountService accountService){
            AccountService = accountService;
        }

        public JsonFileAccountService AccountService { get; }

        [HttpGet]
        public IEnumerable<Account> Get(){
            return AccountService.GetAccounts();
        }

         
    [HttpGet ("/account/{id}")]
        public string Get (int id) {
            var accounts = AccountService.GetAccounts ().ToList (); {
                foreach (var item in accounts) {
                    if (id == item.Number) {
                        List<Account> list = new List<Account> ();
                        list.Add (item);
                        var json = JsonSerializer.Serialize<IEnumerable<Account>> (list);
                        return json;
                    }
                }
                return "[{\"error\":\"Could not locate account\"}]";
            }
        }
    
    }


}
