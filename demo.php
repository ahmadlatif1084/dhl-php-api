<?php
$oldstring='<?xml version="1.0" encoding="UTF-8"?> <SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"> <SOAP-ENV:Header xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"></SOAP-ENV:Header><SOAP-ENV:Body> <shipresp:ShipmentResponse xmlns:shipresp="http://scxgxtt.phx-dc.dhl.com/euExpressRateBook/ShipmentMsgResponse"> <Notification code="0"> <Message></Message> </Notification> <PackagesResult> <PackageResult number="1"> <TrackingNumber>JD011100003637176754</TrackingNumber> </PackageResult> </PackagesResult> <LabelImage> <LabelImageFormat>PDF</LabelImageFormat> <GraphicImage>JVBERi0xLjQKJeLjz9MKNCAwIG9iago8PC9GaWx0ZXIvRmxhdGVEZWNvZGUvTGVuZ3RoIDUxPj5zdHJlYW0KeJwr5HIK4TJQMDUz07M0VghJ4XIN4QrkKlQwVDAAQgiZnKugH5FmqOCSrxDIBQD9nwpWCmVuZHN0cmVhbQplbmRvYmoKNiAwIG9iago8PC9Db250ZW50cyA0IDAgUi9UeXBlL1BhZ2UvUmVzb3VyY2VzPDwvUHJvY1NldCBbL1BERiAvVGV4dCAvSW1hZ2VCIC9JbWFnZUMgL0ltYWdlSV0vWE9iamVjdDw8L1hmMSAxIDAgUj4+Pj4vUGFyZW50IDUgMCBSL01lZGlhQm94WzAgMCAyODAuNjMgNTY2LjkzXT4+CmVuZG9iagoyIDAgb2JqCjw8L1N1YnR5cGUvVHlwZTEvVHlwZS9Gb250L0Jhc2VGb250L0hlbHZldGljYS1Cb2xkL0VuY29kaW5nL1dpbkFuc2lFbmNvZGluZz4+CmVuZG9iagozIDAgb2JqCjw8L1N1YnR5cGUvVHlwZTEvVHlwZS9Gb250L0Jhc2VGb250L0hlbHZldGljYS9FbmNvZGluZy9XaW5BbnNpRW5jb2Rpbmc+PgplbmRvYmoKMSAwIG9iago8PC9TdWJ0eXBlL0Zvcm0vRmlsdGVyL0ZsYXRlRGVjb2RlL1R5cGUvWE9iamVjdC9NYXRyaXggWzEgMCAwIDEgMCAwXS9Gb3JtVHlwZSAxL1Jlc291cmNlczw8L1Byb2NTZXQgWy9QREYgL1RleHQgL0ltYWdlQiAvSW1hZ2VDIC9JbWFnZUldL0ZvbnQ8PC9GMSAyIDAgUi9GMiAzIDAgUj4+Pj4vQkJveFswIDAgMjgwLjYzIDU2Ni45M10vTGVuZ3RoIDQxNjg+PnN0cmVhbQp4nJVb23IdRxV9P18xj0koT6Z7+ponfMNxSoRgiXKA8GAU2RIc2WArlYJv54F96e69+lihTPnBWjprrdPX3Xv3jP552JaY0lr35ZZ+3JbjwZdtTTv+2AjHw/Xh5eHtwS0/H/zyDdH/dnDb8tvDn/+yLT8e/in6bXn/5vDo4vDlb9ziwpr8cvGaFPyB/CL4JcZt3epycXt4QD/syZXl4vLw2dPvv3vx9Px8cf6rbfv84m9kR79+eqFufglryWjm6RdpiYGamNlsW/eStyRefnP1wZYf+H159vJ88eu2fLl8EdwDV7bdxS/Qfls9dWiTDvG/F88Obi9rtXFx1a852TB0TKxYGCu9w+vDeR8BauOephHYK/8mBs9W1GpyqtLkiycX2CrvtjVGGquy5kxt8FteC01FjOvGX+K9X1NAvK977VhQIRTYntHmBO3LpUl3/ZBGhyeFWuQJOf3Mr8EJ160hCnZRPmUf4hQR+tgRU8u6j0+PJ9j7unpu0b74fVu1Nc6zbnerd9LypB/63m3v0+oHujwZlOPhNQ1LWjMNS6D/Ag+To4ZWNU/cCEdTkxDXNbuOBclA0NJisO+CdulPl3r9tOinnofSu7xW7XsUapYFQdAH+TA4WeZZhTF1xMOUZU8p5mFKa6GBCZU74mnFhNEf72mDhI4uT3or/d+pIaW7Uf93mn9g8LfxCA7MY1/s26/Zg766hj5Rt8IpESZyT+uWbdR9kPECvEkPeLEJpGWWAWZZ8YNN8+wA9xb4DL2g5vLSsVbTGCIOtCrz3AtX4xqrjKMrbcNsAx9l7ALvPJnHo/EbRo/Rjq2sPsFcbTp3PGAOPRqe2pH5P/aIvLEaPgqGCRr0hmU4WtjVppFFkj6MpjIu0LNOb3iy6PsiFQkBYwQJ8z4frer8hsUjb2vFWWmcMRr2vdJ75u9hHg2fonr0MJZIjGuLA01BnNd8sjjos+KgGRP2uufkSymY0S95zxJKEr741zpyXj/lhd02Fy3QLcLmovAeCw5RXWOA7k7fy5uPglFKFMb59GjR30apnwbjLCD36TBMPIe01Shcy+nl9uB2OQp+8/7d7fLVPUdg4RAKFhQ5eV1QaHXtCNzylvU4ffL12ac7UOiLuzrUULw6hBA+3WHb+DDQjpRIm5kdHj18/nD57cMXT5ewb5vzn2wX6sYTKHY0L3pCvnh3++rtzat7TGTiMDWgfUu5AbuENrrBBTrl2Obxu7d3ry7vvuI4HUNwfq/3WGYOQFO2UeUghAkLiZaEWP7u/c2bm7cfz9g9KVD34Q+S5ECOl6Y07OybKS9ZQsl8dIw11fD/WFN0+lFcDFmOTZ2MSCtCE4x385pytNF+PlQOTiEHjpW3DZXIZxAflhz9BjyXHU6n56B3PASxcugHhRrq8ur2NDmumn2HZt/pHQ9BszdFmyzqNh2TH68iaqcLbVnvKehk/Xh1++6eCf8lDwpY3SOlra2hr//z5ur44e79uqT7Jj1xYPnYihIi16al1Jh0s1e/bcuzdx8+vPrp/7DaZBWJVY4p6Ayf/3xz9++r98dXb3/8pE0i6WzIdd1SS6Cdi/u0Se7x2TldvM/HcaRvWT01yrWs/uIFxYDnZ0+X84fPz55/+2x5fPaHR8v5y+cXf3r64uzht0/ubevc6/4dKXCmoWEh1qKT8Wr9cHfz+u7q/a//evzp6uebt+vl9f/RfzpxmmWifaat/lVwuZQt173WuVawiB/4II+wOxXDsqS5SnPJwin8njMvX/rGz1b2tsmmND1N3Y6yEXbyj7JuLFR8/eDR+dmDPz379p6OUtLo5q+lFJOOrL1wtio1B48urz23xTnk7Lxl4LBvmDsFH0bu1/hIkaTCR2a1n/jslopq3bad9j3VhajjzEjCyPDpuOkn22E2yktZJHXqJuUSdJjslNrEXhDGqj29uLm9um977RxQ7/Hg5DXqkLew8f29x9dHbfCyCKANVPF5LUqfvPrXyWBL52ysW19HdJckCMwDH7E7Z+dtC2yOQxMfjVevl8t3P159tXx3c3V5tbhPaKorZQ3LTtl6ak31Lu3q993l1Zfn1/+4W15e3by5vvuUjnN2FMGOo0CoRYdfWnXf+PuTTenK6GR0Ov5tS3J3t+Xvbz7tkKXFs+yUFxUJ3bt8Tibuy/tHpviPx5mOp9KiNdUjSXOixz99uHt3e/V+oRG/en/19nSst8Xz4Qez2jBPq5OF7nPhgoi6FqWmVnjskKsnpjdyh9cHJ6m5qaWsNLXCoVYyqCWZHWrqHOXFQ93gUCvZ1FTq1wjqyHcNplbY6Y0M6sTHtqkzlwmmVjjUSgY18bypdykghrrBoVayqSkGc1k91J4zClMr7PRGBnXkw9/UiQ9wUyscaiWDWipQUxcuo02tcKiVDOrKYXqoueSFGWtwqJVs6uC52jV1WGHCFHVyo4I2yo3H0Cbe2SZWONRKBnWVWqurI2fwpm5wqJVs6naFMtSe74ZMrbDTGxnUOx+tptYrpaFWONRKBnVaYcgoL4gw4A0OsXBBW/hmaogpa6ww4A0OsZJNnXZOmE0dVtggijq5UUEb+b7KtIn/N7HCoVYyqDPfKZi6SlE91AqHWsmm5gQdZotSwAz7o8FOb2RQ0+4D8c4HvokVDrFwQUt7z4E4y7XnECscYiWDunDOO9ScYJlY0dAq1bRF7p5Mu/Nth4kVdnojg5oyWFihBYf/2OFQKxnUxDNxxdE/djjEwjVt3blyMHGYTp8GO72RQU3BDb+aRhTEgoZWqaDFySEtDv6xw6Gep47UlW807dzbcPyPAw+90uHk2yi+BTTY+SkEGCgeh1/jo0Pk6wRwSJzIg4Nic1A+OmS+OwIHyu0KOig2B+WjQ+UrZnOg1Ak7odD0ygY9pbpT8uHm+e94ODQ+OkQ4/dhhWgMNmj5OhyPry5SCOKpTMAfp2BzKSRbiOE2J6BCmPKTj4dD46BCnVMRxthHQIU3JSOejQ57SEUdJJuYjHZtDPslIHKcsuKA568CBbHg4ND46hCktcXuc8pKOzSGcZCZuT1Nq4jj7wE3VsDmkk+yEn3lheuLCNuUnHZtDOclQHKcwuKI5D8Fd1bAlxO4kT3Fh5+oMHE7WQzhZD42PDpL7g0OdspWOzUH54MAJDc5FdFPG0vFwaHx08FPS4qj2xKylY3PwJ3mL48QGDdKUuXRsBnHOXRznNjiXnJ9MLVBsBvkkf3FJHhWYQ8KZOQ48HBofHcKUxjjOVHAmGjaHcJLJOE51cF+lMuUyHZtDOslmXMK9TA6cseC+atgc5r3ONdouzxXNIcCxeRzYyjTlo0OcEhuXcW6OA5tDPMltHFEjrukiz0SgUlRsDsoHB8paKq7p4qccp+Ph0Pjm8Nqu9/lCER56eDndKZyEfr1fctU7x5cP//jo+dnZIt3fSeHmBxB0HnA82OVhNpew/WeuXxfHl8PyUE5oA0rxyjXG0O2yG4ZU4KArGdVJZmioM1fzphZoaiGDmgrM5EzNgbmaWuGgKxnVWVZsVwd5Nj/UCk0tZFDTdHgP6shXKqYWOOhKRjU/nzJxkfg/xAJNzFzQUsyrMGYUwCK0W+GgKxnVUbKpoeZn9CZmZFqhgrYVWl2b5DZviBUOupJRnSQHGuosieBQCzS1kEFN5c4Oc01bu8CQKRx0JaM6SsY91PJGgakFmlrIoKYdmGDMir7M0dUKB13JqA6rh5aXuMISF2RaoaJWnskMLRUOHsZMoamFDGqqFQqsUUr+HaxRhYOuZFTzDeYQu00Pla5u2OTMBjUn/jGiPklwNr1gCyzKnxyKpGrDQe8zzUExOAgfHVycwgtn0RhfGjYH5U8OWco+c9ACyBwEg4Pw0YHf+cFeUNIbsBeKzUH5k0OaAhUnwTv2QjE4pJNYxUlvhQXs6AcPK7hhc1D+5BAxYPGLVgkXg2IwiHPM4oQVgxYnixi1GjYD5U8Oeh9oDgUjl0LQCxv1lNhFHEV+LwliQMPmoPzJIUHEupVELeNaUAwOaQppmshhEHPJrdgEgaZX9qT3EPVuJcnKk0GaAlnjTw5aKAwHCpx41DcMDsJHB0qyJoMo77mZgWAzEPqkr/xs3gwofHocRcVgIHx0KFILm0GWOsQMBEPGwvRJX+SduWFQ5VG5GSgGA+GjQ/VzbGuXMuYQ59im/MkhT7HN8xse0ImGwSGfxDa/6Ztz5hDn3EmxJU/KnxwKxDJ2qFJMm4NgcChTrCMH51bM/Sh8ZtiTDZuB0Cd9ltspM6hTDtYwGAh/yj63KbLxy5iYhzUMCeh2Etn48e2GnfBlCm0Ng0OasrNrfcUSVoOnTBNjW8PmoPzJQTJ2cCiQaB07Bgfho0PYIBe7lXf4IvZCsTkof3KIU3TznIXialAMDvEkuslDShxJyh8xOjVsDsqfHPIUnTyVxjuOpGJwyCfRiV9iwVTNJ7m5GwYCQV9PcrVfLK2qPAnjG4u9amkVwx710fMPn/mzHz5//DW/bPKrvWwb/b/Nzy1dkIgwnls2DK8znL5AIY9J+WDuL7DRpNvj6Me/9Dha67OauGSUB5GUzyg6NuQlaTyOgk+RFHIRlDtt1SHcZZsrU3mgS7xHh07ehBxCQUOZdHd3JXUu1KHc5Y3zrlTUucoEZeIzYigLZ6JDWTRPbcqkp0tXBnmLsiupLqMY2ZWKOleZoJRnwEMpb1sNZdWKoCn1afFQRnmzpCv5xch9KBV1rjJBSXvMhJVD2RBWDXRNGFdsa5Jn8l2YAkePLlTUucoEpTzRGsq62jcKGDp98jV0mjd0HR/6ZQgVdW7POIaS4quNDm2PzWZE0VAK05T8+Md6yZWUjauizlUmKNNqX0mH826NVTSEacVvpIIrRxMmW7/HhjpXmaCsuGL5sQos2QaHts5rlksjWLRcOW0FxElvfdq2VjKqCxd2Q02HcLQRbtDURUvGoaYzPCVQZ1y9DQ61klEtjziHmiNQMLVCU+vzUFPTj6WAOtmqPnY41EpGdbZlf9sv+oe63fsPdcZdcS0lUYCWcxxxoE64iBsZ1YWfjQx1kBewh1qhqYUMaiqGNlRLSm3qlnE3tZJRXTCQyxU5LDWFpi5zNOf78M2BOuLmaHColYzqhBuED1bYIQ2aOs17hO+xYalxoIKGKxxi4aK22qbQy+UAK02hiStumVbUQLtztoh97HColYzqMu0Rjlqw0hSaupzskRJsU7A6Yphv0A7tgFtGixkPLefwZadog6YumqkONRcqIM78SpeJBQ6xcFFbMeRzxQIxv0ET1znq8/uhsMb5bz+CB3XGgN3IqC62JW6lsIDY36CpC24YLjuCbYlb+VMkWOMNDrWSUV1xjctfbUHLFZq6zmuc/64Lkh5+o9FDyxVaquXnvIf/zgtOAs9ZEmRbCk1d55OAywZXQJ3xJGhwqJWM6mIpz638nRKs8gZNXTAjupa/W4KGh4wHQYNDLFzQRodrnOsIWOMNDnF08xr3MVng15oChkyQaRMeClpOwCmg5cPQttqia+t8BvxiKZGTPEIJfFGoL9LmkmOrJL754fPlmycUVJ3biL5Rz/bs8pJynB7X/J7+/RdcSo4RCmVuZHN0cmVhbQplbmRvYmoKNSAwIG9iago8PC9LaWRzWzYgMCBSXS9UeXBlL1BhZ2VzL0NvdW50IDEvSVRYVCgyLjEuNyk+PgplbmRvYmoKNyAwIG9iago8PC9UeXBlL0NhdGFsb2cvUGFnZXMgNSAwIFI+PgplbmRvYmoKOCAwIG9iago8PC9Nb2REYXRlKEQ6MjAxOTA3MjMwODA3MDRaKS9DcmVhdGlvbkRhdGUoRDoyMDE5MDcyMzA4MDcwNFopL1Byb2R1Y2VyKGlUZXh0IDIuMS43IGJ5IDFUM1hUKT4+CmVuZG9iagp4cmVmCjAgOQowMDAwMDAwMDAwIDY1NTM1IGYgCjAwMDAwMDA0ODAgMDAwMDAgbiAKMDAwMDAwMDI5OSAwMDAwMCBuIAowMDAwMDAwMzkyIDAwMDAwIG4gCjAwMDAwMDAwMTUgMDAwMDAgbiAKMDAwMDAwNDg4NCAwMDAwMCBuIAowMDAwMDAwMTMyIDAwMDAwIG4gCjAwMDAwMDQ5NDcgMDAwMDAgbiAKMDAwMDAwNDk5MiAwMDAwMCBuIAp0cmFpbGVyCjw8L0luZm8gOCAwIFIvSUQgWzwzYmJjMTBlOTJhYjM1YmNlZTRlYjI2N2ViOWQzZTRjND48YjJiMzUxZDA0YTQ2M2NmODVkZDgzZjUwOTJkMDdhMTQ+XS9Sb290IDcgMCBSL1NpemUgOT4+CnN0YXJ0eHJlZgo1MTAyCiUlRU9GCg==</GraphicImage> </LabelImage> <ShipmentIdentificationNumber>1127310144</ShipmentIdentificationNumber> <DispatchConfirmationNumber>CBJ180121002626</DispatchConfirmationNumber> </shipresp:ShipmentResponse> </SOAP-ENV:Body> </SOAP-ENV:Envelope>';
            $search = '<?xml version="1.0" encoding="UTF-8"?> <SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"> <SOAP-ENV:Header xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"></SOAP-ENV:Header><SOAP-ENV:Body>' ;
$search2='</SOAP-ENV:Body> </SOAP-ENV:Envelope>';
 $trimmed = str_replace($search, '', $oldstring) ;
 $trimmed2 = str_replace($search2, '', $trimmed) ;
$xml = simplexml_load_string($trimmed2);
echo "<pre>";
print_r($xml);
?>