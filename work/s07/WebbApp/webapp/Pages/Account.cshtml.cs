using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;
using webapp.Services;
using webapp.Models;


namespace webapp.Pages
{
    public class AccountModel : PageModel
    {
        private readonly ILogger<AccountModel> _logger;

        public JsonFileAccountService AccountService;

        public IEnumerable<Account> Accounts  { get; private set; }
       
        public AccountModel(
            ILogger<AccountModel> logger,
            JsonFileAccountService accountService
            ) {
            _logger = logger;
            AccountService = accountService;
        }

        public void OnGet()
        {
              Accounts = AccountService.GetAccounts();
        }
    }
}
