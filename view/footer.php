<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        add_task();
        function add_task() {
            $('.add-new-task').submit(function() {
                var new_task = $('.add-new-task input[name=new-task]').val();

                if (new_task != '') {
                    $.post('includes/add-task.php', {task: new_task}, function(data) {
                        $('.add-new-task input[name=new-task]').val();
                        $(data).appendTo('.task-list ul').hide().fadeIn();
                    });
                }
                return false;
            });
        }
        $('.delete-button').click(function() {
            var current_element = $(this);
            var task_id = $(this).attr('id');
            $.post('includes/delete-task.php', {id: task_id}, function() {
                current_element.parent().fadeOut("fast", function() {
                    $(this).remove();
                });
            });
        });
    </script>
</body>
</html>