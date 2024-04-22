<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sizes</title>
<style>
    .button-label {
  --green: #1BFD9C;
  display: inline-block;
  font-size: 15px;
  padding: 0.7em 0.7em;
  letter-spacing: 0.06em;
  font-family: inherit;
  border-radius: 0.6em;
  transition: all 0.3s;
  line-height: 1.4em;
  border: 2px solid var(--green);
  background: linear-gradient(to right, rgba(27, 253, 156, 0.1) 1%, transparent 40%, transparent 60%, rgba(27, 253, 156, 0.1) 100%);
  color: var(--green);
  box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.4), 0 0 9px 3px rgba(27, 253, 156, 0.1);
  cursor: pointer;
  position: relative;
  overflow: hidden;
}

.button-label:hover {
  color: #82ffc9;
  box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.6), 0 0 9px 3px rgba(27, 253, 156, 0.2);
}

.button-label:before {
  content: "";
  position: absolute;
  left: -4em;
  width: 4em;
  height: 100%;
  top: 0;
  background: linear-gradient(to right, transparent 1%, rgba(27, 253, 156, 0.1) 40%, rgba(27, 253, 156, 0.1) 60%, transparent 100%);
  transition: transform .4s ease-in-out;
}

.button-label:hover:before {
  transform: translateX(15em);
}

input[type="radio"] {
  display: none;
}

</style>
   
</head>
<body>

    <fieldset class="TagList inline-wrap gap-2 d-flex">
      <div class="TagToggle block">
        <input type="radio" name="taglist-radio" value="size-s" id="taglist-radio-size-s" required />
        <label for="taglist-radio-size-s" class="button-label">S</label>
    </div>
    <div class="TagToggle block">
        <input type="radio" name="taglist-radio" value="size-m" id="taglist-radio-size-m" required />
        <label for="taglist-radio-size-m" class="button-label">M</label>
    </div>
    <div class="TagToggle block">
        <input type="radio" name="taglist-radio" value="size-l" id="taglist-radio-size-l" required />
        <label for="taglist-radio-size-l" class="button-label">L</label>
    </div>
    <div class="TagToggle block">
        <input type="radio" name="taglist-radio" value="size-xl" id="taglist-radio-size-xl" required />
        <label for="taglist-radio-size-xl" class="button-label">XL</label>
    </div>
    <div class="TagToggle block">
        <input type="radio" name="taglist-radio" value="size-2xl" id="taglist-radio-size-2xl" required />

    </fieldset>
      

</body>

</html>
