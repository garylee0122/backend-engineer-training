using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using DemoMVC.Models;
using DemoMVC.Data;

namespace DemoMVC.Controllers;

public class HelloController : Controller
{
    private readonly ILogger<HelloController> _logger;
    private readonly AppDbContext _context;

    public HelloController(ILogger<HelloController> logger, AppDbContext context)
    {
        _logger = logger;
        _context = context;
    }

    public IActionResult Index()
    {
        return View();
    }

    [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
    public IActionResult Error()
    {
        return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
    }

    [HttpGet("Hi")]
    public IActionResult Hello()
    {
        return View();
    }

    [HttpGet("productsview")]
    public IActionResult ProductsView()
    {
        var products = new List<Product>
        {
            new Product { Name = "iPhone", Price = 30000, Stock = 10 },
            new Product { Name = "iPad", Price = 20000, Stock = 5 }
        };

        return View("ProductsView", products);
    }

    [HttpGet("FormInput")]
    public IActionResult FormInput()
    {
        return View("FormInput");
    }

    [HttpPost("submit")]
    public IActionResult Submit([FromForm] string name)
    {
        return Content("Hello " + name);
    }

    [HttpGet("productspage")]
    public IActionResult ProductsPage()
    {
        var products = _context.Products.ToList();
        return View("ProductsView", products);
    }
}