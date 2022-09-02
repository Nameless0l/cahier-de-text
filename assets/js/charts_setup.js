var chart = bb.generate({
  data: {
    columns: [
      ["Blue", 2],
      ["orange", 4],
      ["green", 3],
    ],
    type: "donut",
    onclick: function (d, i) {
      console.log("onclick", d, i);
    },
    onover: function (d, i) {
      console.log("onover", d, i);
    },
    onout: function (d, i) {
      console.log("onout", d, i);
    },
  },
  donut: {
    title: "70",
  },
  bindto: "#donut-chart",
});
