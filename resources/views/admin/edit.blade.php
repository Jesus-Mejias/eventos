<div class="header">
    Edit event
</div>

<div class="body">
    <form method="POST" action="todo">
        <div>
            <label for="title">Title</label>
            <input id="title" type="text" name="title">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div>
            <label for="date">Date</label>
            <input id="date" type="date" name="date">
        </div>

        <div>
            <label for="time">Time</label>
            <input id="time" type="time" name="time">
        </div>

        <div>
            <label for="duration_days">Duration (days)</label>
            <input id="duration_days" type="number" name="duration_days">
        </div>

        <div>
            <label for="location">Location</label>
            <input id="location" type="text" name="location">
        </div>

        <div>
            <label for="standard_price">Price</label>
            <input id="standard_price" type="number" name="standard_price">
        </div>

        <div>
            <label for="capacity">Capacity</label>
            <input id="capacity" type="number" name="capacity">
        </div>

        <div>
            <button type="submit" id="save-event">
                Save
            </button>
        </div>
    </form>
</div>
