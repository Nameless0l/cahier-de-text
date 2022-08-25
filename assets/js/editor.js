tinymce.init({
  selector: "textarea#basic-example",
  height: 500,
  menubar: true,
  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table paste code help wordcount",
  ],
  toolbar:
    "undo redo | formatselect | " +
    "bold italic backcolor | alignleft aligncenter " +
    "alignright alignjustify | bullist numlist outdent indent | " +
    "removeformat | help",
  content_style:
    "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
});

// var currentAuthor = "A Tiny User";
// var userAllowedToResolve = "Admin1";

// tinymce.init({
//   selector: "textarea#basic-example",
//   toolbar: "bold italic underline | addcomment showcomments",
//   menubar: "file edit view insert format tools tc",
//   menu: {
//     tc: {
//       title: "Comments",
//       items: "addcomment showcomments deleteallconversations",
//     },
//   },
//   plugins: "paste code tinycomments",
//   tinycomments_mode: "embedded",
//   tinycomments_author: currentAuthor,
//   tinycomments_can_resolve: function (req, done, fail) {
//     var allowed =
//       req.comments.length > 0 && req.comments[0].author === currentAuthor;
//     done({
//       canResolve: allowed || currentAuthor === userAllowedToResolve,
//     });
//   },
//   content_style:
//     "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
//   /* The following setup callback opens the comments sidebar when the editor loads */
//   setup: function (editor) {
//     editor.on("SkinLoaded", function () {
//       editor.execCommand("ToggleSidebar", false, "showcomments", {
//         skip_focus: true,
//       });
//     });
//   },
// });
