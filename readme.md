

## usage

Return an iframe of the video for YouTube & DailyMotion

``` php
$iframe = new abVideoIframe('https://www.youtube.com/watch?v=NDY08A72RGk');
echo $iframe->get_video();

```


```css

  .iframe-video {
    max-width: 100vw;
    max-height: 56.25vw; /* height/width ratio = 315/560 = .5625 */
  }

```
