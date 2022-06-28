<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/make_play_styles.css">
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    @csrf
    <input type="text" id="title" name="title">
    <textarea name="long-text"></textarea>
    <textarea name="short-text"></textarea>
    <textarea name="mobile-text"></textarea>
    <textarea name="description"></textarea>
    <input type="file" name="photo">
    <input type="submit">
</form>
</body>
</html>
