About files in this directory
===

 The CSS file in this directory affects the entire site.
 That means it affects all layouts.
 If you want to reflect the style only in a specific layout,
 Change the css file in the "asset/layout/{$layout_name}/css" directory.

# Usage

## table

 Use div to table layout.

```
<div class="table">
　<div class="tr">
　　<div class="th">table head</div>
　　<div class="td">table data</div>
　</div>
</div>
```

 How to separate table cells. Table cells are "collapse" by default. Add the "separate" class to the table.

```
<table class="separate">
```

 You can make the background color of the table striped.

```
<table class="stripes">
```
