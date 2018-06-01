@if(strlen($routeNum) <= 2)
    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" height="68.3" width="86.4" version="1.1"
         viewBox="0 0 86.4 68.3">
  <path fill="#fff"
        d="m7.13 0h72.7c3.64 0 6.62 3.53 6.62 7.84v52.7c0 4.31-2.98 7.84-6.62 7.84h-73.1c-3.72 0-6.7-3.5-6.7-7.8v-53.1c-0.00000178-4.29 3.49-7.4 7.13-7.4z"/>
        <path fill="#fff"
              d="m9.13 2.75h83.7c4.12 0 6.38 2.27 6.38 6.22v50.6c0 3.95-2.56 5.93-6.68 5.93h-83.3c-4.12 0-6.38-2.39-6.38-6.34v-50.9c0-3.89 2.27-5.51 6.32-5.51z"/>
        <path d="m7.73 2.75h70.9c3.49 0 5.41 2.27 5.41 6.22v50.6c0 3.95-2.17 5.93-5.66 5.93h-70.6c-3.49 0-5.41-2.39-5.41-6.34v-50.9c0-3.89 1.92-5.51 5.36-5.51z"/>
        <path fill="#fff"
              d="m8.44 5.33h69.5c3.29 0 3.99 1.26 3.99 4.91v48.2c0 3.65-1.52 4.55-4.8 4.55h-67.8c-3.29 0-4.8-1.2-4.8-4.79v-49.1c0-3.59 0.708-3.77 3.94-3.77z"/>
        <path d="m8.44 5.33h69.5c3.29 0 3.99 1.26 3.99 4.91v48.2c0 3.65-1.52 4.55-4.8 4.55h-67.8c-3.29 0-4.8-1.2-4.8-4.79v-49.1c0-3.59 0.708-3.77 3.94-3.77z"
              stroke-miterlimit="3.86" stroke-width="0" fill="none"/>
        <text letter-spacing="0px" text-anchor="middle" word-spacing="0px" text-align="center" font-size="60px"
              line-height="100%" y="0" x="0" font-family="&apos;Roadgeek 2005 Engschrift&apos;" fill="#000">
            <tspan y="55" x="45">{{ $routeNum }}</tspan>
        </text>
</svg>
@else
    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" height="68.3" width="102" version="1.1"
         viewBox="0 0 102 68.3">
  <path fill="#0071b3"
        d="m8.41 0h85.7c4.3 0 7.82 3.53 7.82 7.84v52.7c0 4.31-3.52 7.84-7.82 7.84h-86.4c-4.28 0-7.8-3.5-7.8-7.8v-53.1c0-4.29 4.12-7.4 8.41-7.4z"/>
        <path fill="#fff"
              d="m8.41 0h85.7c4.3 0 7.82 3.53 7.82 7.84v52.7c0 4.31-3.52 7.84-7.82 7.84h-86.4c-4.28 0-7.8-3.5-7.8-7.8v-53.1c0-4.29 4.12-7.4 8.41-7.4z"/>
        <path fill="#fff"
              d="m9.13 2.75h83.7c4.12 0 6.38 2.27 6.38 6.22v50.6c0 3.95-2.56 5.93-6.68 5.93h-83.3c-4.12 0-6.38-2.39-6.38-6.34v-50.9c0-3.89 2.27-5.51 6.32-5.51z"/>
        <path d="m9.13 2.75h83.7c4.12 0 6.38 2.27 6.38 6.22v50.6c0 3.95-2.56 5.93-6.68 5.93h-83.3c-4.12 0-6.38-2.39-6.38-6.34v-50.9c0-3.89 2.27-5.51 6.32-5.51z"/>
        <path fill="#fff"
              d="m9.96 5.33h82c3.88 0 4.71 1.26 4.71 4.91v48.2c0 3.65-1.79 4.55-5.67 4.55h-80c-3.9 0-5.69-1.2-5.69-4.8v-49.1c0-3.59 0.835-3.77 4.65-3.77z"/>
        <path d="m9.96 5.33h82c3.88 0 4.71 1.26 4.71 4.91v48.2c0 3.65-1.79 4.55-5.67 4.55h-80c-3.9 0-5.69-1.2-5.69-4.8v-49.1c0-3.59 0.835-3.77 4.65-3.77z"
              stroke-miterlimit="3.86" stroke-width="0" fill="none"/>
        <text letter-spacing="0px" text-anchor="middle" word-spacing="0px" text-align="center" font-size="60px"
              line-height="100%" y="0" x="0" font-family="&apos;Roadgeek 2005 Engschrift&apos;" fill="#000">
            <tspan y="55" x="51">{{ $routeNum }}</tspan>
        </text>
</svg>
@endif