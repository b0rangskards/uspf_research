@extends('layouts.default')

@section('content')

<div class="postcontent postcontent-0 clearfix">
   <div class="content-layout">
    <div class="content-layout-row">
    <div class="layout-cell layout-item-0" style="width: 33%" >
        <img width="200" src="images/uspf-res-logo-raw.png">
    </div>

    <div class="layout-cell layout-item-1" style="width: 67%" >
        <h1>
            <span style="color: #D77F33;">ARTICLE:</span> Center For Research System
        </h1>
        <p>The Center for Research will advance the research enterprise of the University by providing effective support to the faculty and students in the conceptualization, implementation and completion of researchers. The CentRe will foster quality research by advocating collaboration between researchers and assuring adherence to ethical and regulatory standards. It is also our vision to provide high achievement and satisfaction in research undertakings for the improvement in the quality of life. </p>
    </div>
    </div>
</div>


<div class="content-layout">
    <div class="content-layout-row">
        <div class="layout-cell layout-item-2">
            <h3>Mission</h3>
            <p>
                <a href="mission.php" class="button">Read More</a>
            </p>
        </div>
        <div class="layout-cell layout-item-2">
            <h3>Vision</h3>
            <p>
                <a href="vision.php" class="button">Read More</a>
            </p>
        </div>
        <div class="layout-cell layout-item-2">
            <h3>Goals</h3>
            <p>
                <a href="goals.php" class="button">Read More</a>
            </p>
        </div>
    </div>
</div>


<div class="content-layout">
    <div class="content-layout-row">
        <div class="layout-cell layout-item-1">
            <h1>
                <span class="latest-updates-span"></span> Latest Updates
            </h1>

            <section>
                <table id="updates_table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Events</th>
                            <th>Participants</th>
                        </tr>
                    </thead>
                     <tbody>
                    </tbody>
                </table>
            </section>

            <p>
                <a href="#">Read more...</a>
            </p>

        </div>
    </div>
</div>



</div>

@stop