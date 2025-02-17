@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@extends('template')
@section('content')
    <x-breadcrumbs :page="'Home'" />
    <section class="home" x-transition>
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
        <div class="col-2">
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
            <div class="summary" x-data="{ warning: true, increment: false }">
                <h3>Summary</h3>
                <div class="header">
                    <button @click="warning=true;increment=false">Warnings <span>3</span></button>
                    <button @click="warning=false;increment=true">Increment</button>
                </div>
                <div class="content" x-show="warning" x-cloak>
                    <button class="danger">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam,
                        quis?</button>
                    <button class="danger">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam,
                        quis?</button>
                    <button class="danger">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam,
                        quis?</button>
                    <hr>
                    <p class="terminated">Terminated</p>
                </div>
                <div class="content" x-show="increment" x-cloak>
                    <button class="success">PKR/17,000 <span class="progress">Jan 2024</span></button>
                    <button class="success">PKR/25,000 <span class="progress">Jun 2024</span></button>
                    <button class="success">PKR/40,000 <span class="progress">Dec 2024</span></button>
                    <button class="success">PKR/100,000 <span class="progress">Jan 2025</span></button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="leaves">
                <h3>Leaves Status</h3>
                <div class="stage" x-data="{ leave: false }">
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
                    <button @click="leave=true">Apply For Leave</button>
                    <div class="leaveapplication" x-show="leave" x-cloak @click.outside="leave=false" x-transition>
                        <div class="overlay"></div>
                        <div class="content" @click.outside="leave=false">
                            <button @click="leave=false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon">
                                    <path d="M18 6 6 18" />
                                    <path d="m6 6 12 12" />
                                </svg>
                            </button>
                            <form action="/leaves/store" method="POST">
                                @csrf
                                <h2>Leave Application</h2>
                                <div class="item">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name"
                                        value="{{ ucwords(Auth::user()->name) }}" readonly>
                                </div>
                                <div class="item">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email"
                                        value="{{ strtolower(Auth::user()->email) }}" readonly>
                                </div>
                                <div class="item">
                                    <label for="designation">Designation</label>
                                    <input type="text" name="designation" id="designation"
                                        value="{{ ucwords(Auth::user()->designation) }}" readonly>
                                </div>
                                <div class="item">
                                    <label for="starting_date">Starting Date</label>
                                    <input type="date" name="starting_date" id="starting_date">
                                </div>
                                <div class="item">
                                    <label for="days">Days</label>
                                    <select name="days" id="days">
                                        <option value="" selected disabled>Select Days</option>
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="item">
                                    <label for="reason">Reason</label>
                                    <textarea type="text" name="reason" id="reason"></textarea>
                                </div>
                                <button>Apply</button>
                            </form>
                        </div>
                    </div>
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
    {{-- @if (Auth::check() && Auth::user()->name == 'Urim')
        <div class="alert" x-transition>
            <div class="overlay"></div>
            <div class="content">
                <h1>You Have Been Terminated</h1>
                <p>Please Contact The HR</p>
            </div>
        </div>
    @endif --}}
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
