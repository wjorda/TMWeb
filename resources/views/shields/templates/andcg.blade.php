@if(strlen($routeNum) <= 2)
<svg xmlns="http://www.w3.org/2000/svg" width="350" height="150" viewBox="0 0 350 150" version="1.1">
    <g fill-rule="evenodd">
        <rect rx="16" ry="16" height="150" width="350" y="0" x="0" fill="#000"/>
        <rect rx="12" ry="12" height="134" width="334" y="8" x="8" fill="#fe0000"/>
        <text letter-spacing="0px" text-anchor="middle" word-spacing="0px" text-align="center" font-size="170px" line-height="100%" y="0" x="0" font-family="&apos;Roadgeek 2005 Transport Heavy&apos;" fill="#fff">
            <tspan y="130" x="175">{{ $routeNum }}</tspan>
        </text>
    </g>
</svg>
@else
<svg xmlns="http://www.w3.org/2000/svg" width="350" height="150" viewBox="0 0 350 150" version="1.1">
    <g fill-rule="evenodd">
        <rect rx="16" ry="16" height="150" width="350" y="0" x="0" fill="#000"/>
        <rect rx="12" ry="12" height="134" width="334" y="8" x="8" fill="#fe0000"/>
        <text letter-spacing="0px" text-anchor="middle" word-spacing="0px" text-align="center" font-size="90px" line-height="100%" y="0" x="0" font-family="&apos;Roadgeek 2005 Transport Heavy&apos;" fill="#fff">
            <tspan y="100" x="175">{{ $routeNum }}</tspan>
        </text>
    </g>
</svg>
@endif