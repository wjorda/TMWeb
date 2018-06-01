@if(strlen($routeNum) <= 2)
    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120" version="1.1">
        <rect ry="10" height="120" width="120" y="0" x="0" fill="#276FB7"/>
        <text letter-spacing="0px" text-anchor="middle" word-spacing="0px" text-align="center" font-size="100px"
              line-height="100%" y="0" x="0" font-family="&apos;Roadgeek 2005 Mittelschrift&apos;" fill="#fff">
            <tspan y="90" x="60">{{ $routeNum }}</tspan>
        </text>
    </svg>
@else
    <svg xmlns="http://www.w3.org/2000/svg" width="170" height="120" viewBox="0 0 170 120" version="1.1">
        <rect ry="10" height="120" width="170" y="0" x="0" fill="#276FB7"/>
        <text letter-spacing="0px" text-anchor="middle" word-spacing="0px" text-align="center" font-size="100px"
              line-height="100%" y="0" x="0" font-family="&apos;Roadgeek 2005 Mittelschrift&apos;" fill="#fff">
            <tspan y="90" x="85">{{ $routeNum }}</tspan>
        </text>
    </svg>
@endif