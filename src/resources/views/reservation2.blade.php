<form action="/reservations" method="POST">
    <input name="hotel_name" id="hotel_name"
    value=<?php
        $hotel = @$_POST['hotel'];
        print"ホテル".$hotel;
    ?>>




    date <input type="date" name="date">
    <div>
        start time <input type="time" name="start" step="1800">
        ~ end time <input type="time" name="end" step="1800">
    </div>
    {{ csrf_field() }}
    <div style="display: inline-flex">
        <input type="submit" name="/reservations" value="予約">
        <input type="button" onclick="history.back()"  value="キャンセル">
    </div>
</form>
