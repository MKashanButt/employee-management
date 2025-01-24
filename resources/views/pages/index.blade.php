@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@extends('template')
@section('content')
    <section class="home">
        <div class="stats">
            <div class="performance">
                <h3>Performance</h3>
                <canvas id="performance"></canvas>
            </div>
            <div class="leaves">
                <div class="heading">
                    <h3>Leaves</h3>
                    <p>4</p>
                </div>
                <div class="content">
                    <div class="item">
                        <h4>Sick Leaves</h4>
                        <p>2</p>
                    </div>
                    <div class="item">
                        <h4>Casual Leaves</h4>
                        <p>2</p>
                    </div>
                </div>
            </div>
            <div class="deduction">
                <h4>Deduction</h4>
                <p>PKR/4,400</p>
            </div>
            <div class="leaves">
                <div class="heading">
                    <h3>Lates</h3>
                    <p>14</p>
                </div>
                <div class="content">
                    <div class="item">
                        <h4>Granted</h4>
                        <p>0</p>
                    </div>
                </div>
            </div>
            <div class="deduction">
                <h4>Deduction</h4>
                <p>PKR/16,000</p>
            </div>
            <div class="attendance">
                <h3>Attendance</h3>
                <canvas id="attendance"></canvas>
            </div>
        </div>
        <div class="announcements">
            <h3>Announcements</h3>
            <div class="stage">
                <div class="item">
                    <p class="profile">HR</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt fuga debitis iste odio amet
                        architecto autem quas tenetur.</p>
                </div>
                <div class="item">
                    <p class="profile">HR</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt fuga debitis iste odio amet
                        architecto autem quas tenetur.</p>
                </div>
                <div class="item">
                    <p class="profile">HR</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt fuga debitis iste odio amet
                        architecto autem quas tenetur.</p>
                </div>
                <div class="item">
                    <p class="profile">HR</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt fuga debitis iste odio amet
                        architecto autem quas tenetur.</p>
                </div>
                <div class="item">
                    <p class="profile">HR</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt fuga debitis iste odio amet
                        architecto autem quas tenetur.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="leaves">
                <h3>Leaves Status</h3>
                <div class="stage">
                    <div class="accepted">
                        <div class="item">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum alias ad laborum
                                aliquid!
                                Rem,
                                tempora repellat..</p>
                            <button class="done">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon">
                                    <path d="M20 6 9 17l-5-5" />
                                </svg>
                            </button>
                        </div>
                        <div class="item">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum alias ad laborum
                                aliquid!
                                Rem,
                                tempora repellat..</p>
                            <button class="done">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon">
                                    <path d="M20 6 9 17l-5-5" />
                                </svg>
                            </button>
                        </div>
                        <div class="item">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum alias ad laborum
                                aliquid!
                                Rem,
                                tempora repellat..</p>
                            <button class="rejected">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon">
                                    <path d="M18 6 6 18" />
                                    <path d="m6 6 12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button>Apply For Leave</button>
                </div>
            </div>
            <div class="attendance">
                <h3>Attendance</h3>
                <div class="stage">
                    <div class="heading">
                        <div class="day">
                            <p>Day</p>
                        </div>
                        <div class="checkin">
                            <p>Check In</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="day">
                            <p>Monday</p>
                        </div>
                        <div class="checkin">
                            <p>14:40 PM</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="day">
                            <p>Tuesday</p>
                        </div>
                        <div class="checkin">
                            <p>14:00 PM</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="day">
                            <p>Wednesday</p>
                        </div>
                        <div class="checkin">
                            <p>14:40 PM</p> <button class="progress">Late</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="day">
                            <p>Thursday</p>
                        </div>
                        <div class="checkin">
                            <p>14:20 PM</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="day">
                            <p>Friday</p>
                        </div>
                        <div class="checkin">
                            <p>14:28 PM</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="day">
                            <p>Monday</p>
                        </div>
                        <div class="checkin">
                            <button class="danger">Not Checked In</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="day">
                            <p>Tuesday</p>
                        </div>
                        <div class="checkin">
                            <p>14:34 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>
    <script>
        const performance = document.getElementById('performance');
        const performanceData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                'Dec'
            ], // X-axis labels
            datasets: [{
                data: [3, 8, 3, 5, 2, 3, 5, 3, 2, 7, 5, 3],
                borderColor: 'black',
                backgroundColor: 'black',
                borderWidth: 2,
                tension: 0.4,
                fill: true,
                pointBackgroundColor: 'white',
                pointBorderColor: 'black',
                pointBorderWidth: 1
            }]
        };

        new Chart(performance, {
            label: null,
            type: 'line',
            data: performanceData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const attendance = document.getElementById('attendance');
        const attendanceData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                'Dec'
            ],
            datasets: [{
                data: [3, 8, 3, 5, 2, 3, 5, 3, 2, 7, 5, 3],
                borderColor: 'black',
                backgroundColor: 'black',
                borderWidth: 2,
                tension: 0.4,
                fill: true,
                pointBackgroundColor: 'white',
                pointBorderColor: 'black',
                pointBorderWidth: 1
            }]
        };

        new Chart(attendance, {
            label: null,
            type: 'line',
            data: attendanceData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
