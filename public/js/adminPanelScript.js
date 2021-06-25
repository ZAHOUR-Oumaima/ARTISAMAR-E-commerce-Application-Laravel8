// This is for able to see chart. We are using Apex Chart. U can check the documentation of Apex Charts too..



/*var options = {
  series: [
    {
      name: "Net Profit",
      data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
    },
    {
      name: "Revenue",
      data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
    },
    {
      name: "Free Cash Flow",
      data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
    },
  ],
  chart: {
    type: "bar",
    height: 250, // make this 250
    sparkline: {
      enabled: true, // make this true
    },
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "55%",
      endingShape: "rounded",
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },
  xaxis: {
    categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
  },
  yaxis: {
    title: {
      text: "$ (thousands)",
    },
  },
  fill: {
    opacity: 1,
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return  val + " dhs";
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#apex1"), options);
chart.render();*/


var options = {
    series: [{
    name: 'Net Profit',
    data: [4400, 5500, 5700, 5600, 6100, 5008, 6300, 6000, 6006, 5200, 6400, 5500]
  }, {
    name: 'Revenue',
    data: [7600, 8500, 10100, 9800, 8700, 10500, 9100, 11400, 9400, 8300, 8900, 10000]
  }, {
    name: 'Free Cash Flow',
    data: [3500, 4100, 3600, 2600, 4500, 4800, 5200, 5300, 4100, 4400, 2200, 3200]
  }],
    chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      endingShape: 'rounded'
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  xaxis: {
    categories: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun', 'Jui', 'aou', 'Sep' , 'Oct' , 'Nov' , 'Dec'],
  },
  yaxis: {
    title: {
      text: 'dhs'
    }
  },
  fill: {
    opacity: 1
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val + " dhs"
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#apex1"), options);
  chart.render();



// Sidebar Toggle Codes;

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");
var sidebarCloseIcon = document.getElementById("sidebarIcon");

function toggleSidebar() {
if (!sidebarOpen) {
sidebar.classList.add("sidebar_responsive");
sidebarOpen = true;
}
}

function closeSidebar() {
if (sidebarOpen) {
sidebar.classList.remove("sidebar_responsive");
sidebarOpen = false;
}
}


//----------------- Navbar ---------------------------------
  const nav=document.querySelector(".sidebar__menu"),
        navList = nav.querySelectorAll("div"),
        totalNavListe=navList.length,
        allSection=document.querySelectorAll(".section"),
        totalSection=allSection.length;

  for(let i=0; i<totalNavListe; i++){
    //const a = navList[i].querySelector("a");
    navList[i].addEventListener("click", function(){
      for(let j=0; j<totalNavListe; j++){
        navList[j].classList.remove("active_menu_link");
      }
      this.classList.add("active_menu_link");

      showSection(this);
    });

    function showSection(element){
      for(let i=0; i<totalSection; i++){
        allSection[i].classList.remove("active");
      }
      const target=element.querySelector("a").getAttribute("href").split("#")[1];
      document.querySelector("#"+target).classList.add("active");
      
    }

  }


//----------------- crud Produits --------------------------

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  var actions = $("table td:last-child").html();
  // Append table with add row form on add new button click
  $(".add-new").click(function(){
      $(this).attr("disabled", "disabled");
      var index = $("table tbody tr:last-child").index();
      var row = '<tr>' +
          '<td><input type="text" class="form-control" name="produit" id="produit"></td>' +
          '<td><input type="text" class="form-control" name="description" id="description"></td>' +
          '<td><input type="number"  min="0" class="form-control" name="quantitée" id="quantitée"></td>' +
          '<td><input type="number" min="0" class="form-control" name="prix" id="prix"></td>' +
          '<td><input type="text" class="form-control" name="image" id="image"></td>' +
          '<td>' + actions + '</td>' +
      '</tr>';
      $("table").append(row);     
      $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
      $('[data-toggle="tooltip"]').tooltip();
  });
  // Add row on add button click
  $(document).on("click", ".add", function(){
      var empty = false;
      var input = $(this).parents("tr").find('input[type="text"]');
      input.each(function(){
          if(!$(this).val()){
              $(this).addClass("error");
              empty = true;
          } else{
              $(this).removeClass("error");
          }
      });
      $(this).parents("tr").find(".error").first().focus();
      if(!empty){
          input.each(function(){
              $(this).parent("td").html($(this).val());
          });         
          $(this).parents("tr").find(".add, .edit").toggle();
          $(".add-new").removeAttr("disabled");
      }       
  });
  // Edit row on edit button click
  $(document).on("click", ".edit", function(){        
      $(this).parents("tr").find("td:not(:last-child)").each(function(){
          $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
      });     
      $(this).parents("tr").find(".add, .edit").toggle();
      $(".add-new").attr("disabled", "disabled");
  });
  // Delete row on delete button click
  $(document).on("click", ".delete", function(){
      $(this).parents("tr").remove();
      $(".add-new").removeAttr("disabled");
  });
});