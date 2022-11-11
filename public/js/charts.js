// ********************* new users ***********************
const labels = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];

const newUsersData = {
    labels: labels,
    datasets: [{
      label: 'New users',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45, 50],
    }]
};

const config = {
    type: 'line',
    data: newUsersData,
    options: {}
};



const newUsers = new Chart(
    document.getElementById('newUsers'),
    config
);

// ********************* deposits ***********************
const depositsData = {
    labels: labels,
    datasets: [{
      label: 'Deposits',
      backgroundColor: '#8b40ea',
      borderColor: '#8b40ea',
      data: [0, 10, 5, 2, 20, 30, 45, 50],
    }]
};

const depositsConfig = {
    type: 'line',
    data: depositsData,
    options: {}
};



const deposits = new Chart(
    document.getElementById('deposits'),
    depositsConfig
);

// ********************* withdrawals ***********************
const withdrawalsData = {
    labels: labels,
    datasets: [{
      label: 'Withdarwals',
      backgroundColor: '#56d6e1',
      borderColor: '#56d6e1',
      data: [0, 10, 5, 2, 20, 30, 45, 76],
    }]
};

const withdrawalsConfig = {
    type: 'line',
    data: withdrawalsData,
    options: {}
};



const withdrawals = new Chart(
    document.getElementById('withdrawals'),
    withdrawalsConfig
);

// ********************* withdrawals ***********************
const profitsData = {
    labels: labels,
    datasets: [{
      label: 'Profits',
      backgroundColor: '#1CAC78',
      borderColor: '#1CAC78',
      data: [0, 10, 5, 11, 20, 19, 45, 76],
    }]
};

const profitsConfig = {
    type: 'line',
    data: profitsData,
    options: {}
};



const profits = new Chart(
    document.getElementById('profits'),
    profitsConfig
);


