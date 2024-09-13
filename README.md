# 3d printed box for the photobooth-app

Download your 3d print files to build a photobooth integrating Raspberry Pi cameras or DSLR.
This repo holds solidworks cad data and files to print the case as well as a basic list of materials to build the booth.

The booth is driven by the [photobooth-app](https://photobooth-app.org/).

![photobooth 3d printed](/images/10inch-overview.png)


## :heart_eyes: Features

- compact design
- DSLR and picamera variants
- led ring signaling countdown and when the photo is actually taken
- 7" or 10" touchscreens supported


## Variants

### Variant in depth
There are two different depth variants:
- higher depth for DSLR
- lower depth for Pi camera setups.

### Variant in width
There are two different width variants:
- wide that allows for 10" screens
- narrow that allows for 7" screens only

### Download model as is

The recommended variants are provided as STEP file for direct 3d printing.
STEP files can be imported in the Slicer and split into single objects before printing.

| Camera    | Width  | Depth | Screen                                                             | STEP file                             |
|-----------|--------|-------|--------------------------------------------------------------------|---------------------------------------|
| Pi Camera | narrow | short | [7inch DSI LCD (C)](https://www.waveshare.com/7inch-DSI-LCD-C.htm) | booth-100-000_narrow-picam-7inch.STEP |
|           | wide   | short | [10.1DP-CAPLCD](https://www.waveshare.com/10.1dp-caplcd.htm)       | booth-100-000_wide-picam-10inch.STEP  |
| DSLR      | narrow | deep  | [7inch DSI LCD (C)](https://www.waveshare.com/7inch-DSI-LCD-C.htm) | booth-100-000_narrow-dslr-7inch.STEP  |
|           | wide   | deep  | [10.1DP-CAPLCD](https://www.waveshare.com/10.1dp-caplcd.htm)       | booth-100-000_wide-dslr-10inch.STEP   |

If you want to modify the model, download the solidworks files.

## :wrench: Material (BOM)
- Touchscreen:
  - 7": [7inch DSI LCD (C)](https://www.waveshare.com/7inch-DSI-LCD-C.htm) (DSI, preferred, tested)
  - 10": [10.1DP-CAPLCD](https://www.waveshare.com/10.1dp-caplcd.htm) (HDMI, preferred, tested)
- RGB-LED Ring:
  - for Raspberry cameras: [5V RGB LED Ring WS2812B, outer diameter 38mm inner diameter 27mm](https://www.amazon.de/gp/product/B07TZK9DNT/ref=ppx_yo_dt_b_asin_title_o01_s00?ie=UTF8&psc=1)
  - for DSLR: [24 Bits WS2812 5050 RGB LED Ring](https://www.amazon.de/gp/product/B07DKJ6SFR/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&psc=1)
- Threaded inserts: [threaded inserts](https://www.amazon.de/VIGRUE-Gewindeeinsatz-Einpressmutter-Gewindebuchsen-Kunststoffteiledurch/dp/B08DHYD73Q/)
- Exhaust cooling fan: any 30x30 5v fan

Above are the parts that are hard required by the mechanical design.
Of course you need to add your Raspberry Pi or alternative computer and the camera depending on your setup.



## :camera: CAD images of the box

![3d printed photobooth box 10inch variant with dslr front view](/images/10inch-dslr-front.png)
![3d printed 10inch variant rear view](/images/10inch-dslr-rear.png)
![3d printed photobooth box 7inch variant with pi camera front view](/images/7inch-picamera-front.png)
![3d printed 7inch variant with pi camera rear view](/images/7inch-picamera-rear.png)
![3d printed photobooth box rear view closed](/images/rear-closed.png)


## :gear: Prerequisites

- 3d printer
- Material listed above and additional electronics specific to your setup (Raspberry Pi, ...)
- Solidworks maker if modifications desired
- works best with the [photobooth-app](https://photobooth-app.org/)


## :mag: Changelog

- v2 release 2024-09-13
  - reworked solidworks model
  - reinforced lower side in frame part
  - split front and side frame so it can be printed in different colors easily.
- rc2 facelift 2024-09-05
  - overall size changed, not compatible with former version.
  - backplate including cooling
  - simplified design
  - prepared for quality touchscreens from waveshare to enhance reliability
- rc1 (2022-10-03)
  - introduced led ring
  - improved assembly and strength
  - camera mount improved and allows for alignment while assembling
- prototype
  - first version for testing and design improvements

### :copyright: License

The design is licensed under the MIT license.  

### :tada: Donation

If you like my work and like to keep me motivated you can sponsor me:

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/donate/?hosted_button_id=8255Y566TBNEC)