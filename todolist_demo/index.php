<?php include('header.php') ?>

<div id='panel'>
    <h1>Todo List</h1>
    <div id='todolist'>
        <ul id='todolist-ul'>
            <li class='clearfix'>
                <div class='checkbox'></div>
                <div class='content'>Lorem, ipsum dolor.</div>
                <div class='actions'>
                    <div class='delete'>x</div>
                </div>
            </li>
            <li class='clearfix complete'>
                <div class='checkbox'>V</div>
                <div class='content'>Lorem, ipsum dolor.</div>
                <div class='actions'>
                    <div class='delete'>x</div>
                </div>
            </li>
            <li class='clearfix'>
                <div class='checkbox'></div>
                <div class='content'>Lorem, ipsum dolor.</div>
                <div class='actions'>
                    <div class='delete'>x</div>
                </div>
            </li>
            <li class='clearfix new'>
                <div class='checkbox'></div>
                <div class='new_content' style='cursor: text;' contenteditable=true>Click to add new task...</div>
            </li>
            <!--
            <li id='template' class='hide clearfix'>
                <div class='checkbox'></div>
                <div class='content' contenteditable=true></div>
                <div class='actions'>
                    <div class='delete'>x</div>
                </div>
            </li>
            -->

            <script id='todolist-item-template' type='text/x-handlebars-template'>
                <li class='clearfix {{#if is_complete}}complete{{/if}}'>
                    <div class='checkbox'></div>
                    <div class='content'>{{content}}</div>
                    <div class='actions'>
                        <div class='delete'>x</div>
                    </div>
                </li>
            </script>

        </ul>
    </div>
</div>

<?php include('footer.php') ?>