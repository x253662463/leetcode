package solution

import (
	"github.com/stretchr/testify/assert"
	"testing"
)

type params struct {
	height   []int
	expected int
}

func TestTwoSum(t *testing.T) {
	testParam := []params{
		{[]int{1, 8, 6, 2, 5, 4, 8, 3, 7}, 49},
	}

	for _, tt := range testParam {
		actual := maxArea(tt.height)
		assert.Equal(t, tt.expected, actual)
	}

}
