document.addEventListener('DOMContentLoaded', function() {
  const ctx = document.getElementById('myChart').getContext('2d');

  let expenseData = {
    labels: ['Food', 'Rent', 'Utilities', 'Transport', 'Misc'],
    datasets: [{
      data: [300, 500, 200, 100, 50],
      backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
    }]
  };

  let incomeData = {
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
      document.getElementById('expenseForm').classList.remove('hidden');
      document.getElementById('incomeForm').classList.add('hidden');
      chartTitle.textContent = 'Pengeluaran';
      newData = expenseData;
    } else {
      document.getElementById('expenseForm').classList.add('hidden');
      document.getElementById('incomeForm').classList.remove('hidden');
      chartTitle.textContent = 'Penghasilan';
      newData = incomeData;
    }

    currentChart.data = newData;
    currentChart.update();
  };

  window.updateChart = function() {
    const expenseForm = document.getElementById('expenseForm');
    const incomeForm = document.getElementById('incomeForm');

    if (!expenseForm.classList.contains('hidden')) {
      expenseData.datasets[0].data = [
        parseInt(document.getElementById('food').value),
        parseInt(document.getElementById('rent').value),
        parseInt(document.getElementById('utilities').value),
        parseInt(document.getElementById('transport').value),
        parseInt(document.getElementById('misc').value)
      ];
    } else {
      incomeData.datasets[0].data = [
        parseInt(document.getElementById('salary').value),
        parseInt(document.getElementById('freelance').value),
        parseInt(document.getElementById('investments').value),
        parseInt(document.getElementById('other').value)
      ];
    }

    currentChart.update();
  };
});
