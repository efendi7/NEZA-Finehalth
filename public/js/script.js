document.addEventListener('DOMContentLoaded', function() {
  const ctx = document.getElementById('myChart').getContext('2d');

  const expenseData = {
    labels: ['Food', 'Rent', 'Utilities', 'Transport', 'Misc'],
    datasets: [{
      data: [300, 500, 200, 100, 50],
      backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
    }]
  };

  const incomeData = {
    labels: ['Salary', 'Freelance', 'Investments', 'Other'],
    datasets: [{
      data: [1200, 450, 300, 150],
      backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
    }]
  };

  let currentChart = new Chart(ctx, {
    type: 'pie',
    data: expenseData,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Pengeluaran'
        }
      }
    }
  });

  window.switchChart = function(type) {
    const chartTitle = document.getElementById('chart-title');
    let newData;

    if (type === 'expenses') {
      chartTitle.textContent = 'Pengeluaran';
      newData = expenseData;
    } else {
      chartTitle.textContent = 'Penghasilan';
      newData = incomeData;
    }

    currentChart.data = newData;
    currentChart.update();
  };
});
